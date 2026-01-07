# Hosting Requirements for Portfolio Project

This document outlines all the requirements needed to host this Laravel portfolio application on a hosting platform.

## Server Requirements

### PHP Requirements
- **PHP Version**: 8.1 or higher (8.2+ recommended)
- **Required PHP Extensions**:
  - BCMath
  - Ctype
  - cURL
  - DOM
  - Fileinfo
  - JSON
  - Mbstring
  - OpenSSL
  - PCRE
  - PDO
  - Tokenizer
  - XML
  - Zip

### Web Server
- **Apache** (with mod_rewrite enabled) OR
- **Nginx** (recommended for better performance)
- **PHP-FPM** (if using Nginx)

### Database
- **MySQL** 5.7+ OR
- **MariaDB** 10.3+ OR
- **PostgreSQL** 10+ OR
- **SQLite** 3.8.8+ (for development only)

### Node.js & NPM (for asset compilation)
- **Node.js**: 16.x or higher
- **NPM**: 8.x or higher (comes with Node.js)

### Composer
- **Composer**: 2.x (for PHP dependency management)

## File System Requirements

### Directory Permissions
The following directories must be writable by the web server:
- `storage/` (and all subdirectories)
- `bootstrap/cache/`

**Recommended permissions:**
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Disk Space
- Minimum: 100 MB (for application files)
- Recommended: 500 MB+ (for logs, cache, and future growth)

## Environment Configuration

### Required Environment Variables
Create a `.env` file in the project root with the following variables:

```env
APP_NAME="Portfolio"
APP_ENV=production
APP_KEY=base64:your-generated-key-here
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## Deployment Steps

### 1. Upload Files
Upload all project files to your hosting server, excluding:
- `node_modules/`
- `.git/`
- `.env` (create this on the server)
- `storage/logs/*` (keep directory, exclude log files)

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install Node.js dependencies (if needed for asset compilation)
npm install

# Build assets for production
npm run build
```

### 3. Configure Environment
```bash
# Copy .env.example to .env (if exists)
cp .env.example .env

# Generate application key
php artisan key:generate

# Edit .env file with your production settings
nano .env
```

### 4. Run Migrations
```bash
php artisan migrate --force
```

### 5. Optimize Application
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize
```

### 6. Set Permissions
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## Web Server Configuration

### Apache Configuration (.htaccess)
Ensure `public/.htaccess` exists and mod_rewrite is enabled:
```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

### Nginx Configuration
Point document root to `public/` directory:
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/portfolio/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## Security Considerations

### 1. Hide Sensitive Files
Ensure these files/directories are not publicly accessible:
- `.env`
- `composer.json` / `composer.lock`
- `package.json` / `package-lock.json`
- `storage/` (except `storage/app/public/`)
- `vendor/`
- `.git/`

### 2. SSL Certificate
- Install SSL certificate for HTTPS
- Update `APP_URL` in `.env` to use `https://`
- Force HTTPS redirects in web server configuration

### 3. Firewall
- Open ports: 80 (HTTP), 443 (HTTPS)
- Close port 22 (SSH) or restrict to specific IPs
- Close database port (3306) to public

## Recommended Hosting Platforms

### Shared Hosting
- **cPanel/WHM** compatible hosts
- Ensure PHP 8.1+ and required extensions
- SSH access recommended

### VPS/Cloud Hosting
- **DigitalOcean**
- **Linode**
- **AWS EC2**
- **Google Cloud Platform**
- **Azure**
- **Vultr**

### Platform-as-a-Service (PaaS)
- **Laravel Forge** (recommended)
- **Ploi**
- **Heroku** (with Laravel buildpack)
- **Railway**
- **Render**

### Managed Laravel Hosting
- **Laravel Vapor** (serverless)
- **Cloudways**
- **A2 Hosting**

## Post-Deployment Checklist

- [ ] Environment variables configured
- [ ] Application key generated
- [ ] Database migrations run
- [ ] File permissions set correctly
- [ ] Web server configured (document root points to `public/`)
- [ ] SSL certificate installed
- [ ] Application optimized (config, routes, views cached)
- [ ] Error logging configured
- [ ] Backup strategy in place
- [ ] Domain DNS configured
- [ ] Test all routes and functionality

## Maintenance Commands

### Clear Caches
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Update Application
```bash
git pull origin main
composer install --optimize-autoloader --no-dev
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Troubleshooting

### Common Issues

1. **500 Internal Server Error**
   - Check file permissions
   - Verify `.env` file exists and is configured
   - Check `storage/logs/laravel.log` for errors

2. **Permission Denied**
   - Run: `chmod -R 775 storage bootstrap/cache`
   - Verify web server user owns these directories

3. **Database Connection Error**
   - Verify database credentials in `.env`
   - Ensure database exists
   - Check database server is running

4. **Assets Not Loading**
   - Run: `npm run build`
   - Verify `public/build/` directory exists
   - Check `vite.config.js` configuration

## Support

For Laravel-specific issues, refer to:
- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Deployment Guide](https://laravel.com/docs/deployment)

