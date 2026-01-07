# Quick Hosting Checklist

## Pre-Deployment

- [ ] PHP 8.1+ installed with required extensions
- [ ] MySQL/MariaDB database created
- [ ] Web server (Apache/Nginx) configured
- [ ] Node.js 16+ installed (for asset building)
- [ ] Composer installed
- [ ] SSH access to server

## Deployment Steps

1. **Upload Files**
   ```bash
   # Exclude: node_modules, .git, .env, storage/logs/*
   ```

2. **Install Dependencies**
   ```bash
   composer install --optimize-autoloader --no-dev
   npm install
   npm run build
   ```

3. **Configure Environment**
   ```bash
   cp .env.example .env  # if exists
   php artisan key:generate
   # Edit .env with production settings
   ```

4. **Database Setup**
   ```bash
   php artisan migrate --force
   ```

5. **Optimize**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

6. **Set Permissions**
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

7. **Web Server**
   - Point document root to `public/` directory
   - Enable mod_rewrite (Apache) or configure Nginx

## Minimum Requirements Summary

| Component | Requirement |
|-----------|-------------|
| PHP | 8.1+ |
| Database | MySQL 5.7+ / MariaDB 10.3+ |
| Web Server | Apache (mod_rewrite) or Nginx |
| Node.js | 16+ (for build only) |
| Composer | 2.x |
| Disk Space | 500 MB+ |
| Memory | 512 MB+ (1 GB+ recommended) |

## Critical Files to Configure

- `.env` - Environment configuration
- `public/.htaccess` - Apache rewrite rules
- Web server config - Point to `public/` directory

## Security Checklist

- [ ] `.env` file not publicly accessible
- [ ] `APP_DEBUG=false` in production
- [ ] SSL certificate installed
- [ ] File permissions set correctly
- [ ] Database credentials secure

