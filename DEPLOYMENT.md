# 🚀 Deployment Guide

## Deployment Options

### Option 1: Shared Hosting (cPanel)

1. **Build the assets locally**:
```bash
npm run build
```

2. **Prepare files**:
   - Upload all files via FTP/File Manager
   - Make sure `.htaccess` is in the `public` folder

3. **Configure**:
   - Point domain to `/public` directory
   - Set PHP version to 8.2+
   - Copy `.env.example` to `.env`
   - Set `APP_ENV=production`
   - Set `APP_DEBUG=false`
   - Generate key: `php artisan key:generate`

4. **Optimize**:
```bash
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Option 2: VPS/Cloud Server (DigitalOcean, AWS, etc.)

1. **Server Requirements**:
   - Ubuntu 22.04 LTS
   - PHP 8.2+ with extensions
   - Nginx or Apache
   - Composer
   - Node.js & npm

2. **Clone and Setup**:
```bash
cd /var/www/
git clone your-repo portfolio
cd portfolio
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

3. **Configure Environment**:
```bash
cp .env.example .env
php artisan key:generate
```

4. **Nginx Configuration**:
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/portfolio/public;

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

5. **Set Permissions**:
```bash
sudo chown -R www-data:www-data /var/www/portfolio
sudo chmod -R 755 /var/www/portfolio
sudo chmod -R 775 /var/www/portfolio/storage
sudo chmod -R 775 /var/www/portfolio/bootstrap/cache
```

6. **Enable SSL** (Let's Encrypt):
```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d yourdomain.com
```

### Option 3: Laravel Forge

1. **Create Server** on Laravel Forge
2. **Create Site** with your domain
3. **Deploy** from Git repository
4. **Set Environment** variables in Forge dashboard
5. **Enable Quick Deploy**

Build script in Forge:
```bash
cd /home/forge/yourdomain.com
git pull origin main
composer install --no-dev --optimize-autoloader
npm install
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Option 4: Netlify/Vercel (Static Export)

For a **static version** (no PHP backend needed):

1. **Export to HTML**:
   - Visit your local site
   - Save complete webpage as HTML
   - Or use a static site generator

2. **Deploy**:
   - Push to GitHub
   - Connect to Netlify/Vercel
   - Deploy!

**Note**: Contact form won't work without backend. Use a service like Formspree or Web3Forms.

## 🔒 Security Checklist

- ✅ Set `APP_ENV=production` in `.env`
- ✅ Set `APP_DEBUG=false` in `.env`
- ✅ Generate new `APP_KEY`
- ✅ Restrict `.env` file permissions (chmod 644)
- ✅ Keep Laravel and dependencies updated
- ✅ Use HTTPS (SSL certificate)
- ✅ Set proper file permissions
- ✅ Hide `.env` and sensitive files

## 📊 Post-Deployment

### Testing
- ✅ Visit all sections
- ✅ Test mobile responsiveness
- ✅ Check all links work
- ✅ Test contact form
- ✅ Verify social media links
- ✅ Test dark mode

### Analytics (Optional)
Add Google Analytics to `welcome.blade.php` before `</head>`:
```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=YOUR-GA-ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'YOUR-GA-ID');
</script>
```

### SEO Optimization

1. **Update Meta Tags** in `welcome.blade.php`:
```html
<meta name="description" content="Your description here">
<meta name="keywords" content="PHP Developer, Laravel, Web Development">
<meta name="author" content="Mohammed Rabil T">

<!-- Open Graph -->
<meta property="og:title" content="Mohammed Rabil T - PHP Developer">
<meta property="og:description" content="Your description">
<meta property="og:image" content="URL to your image">
<meta property="og:url" content="https://yourdomain.com">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mohammed Rabil T - PHP Developer">
<meta name="twitter:description" content="Your description">
<meta name="twitter:image" content="URL to your image">
```

2. **Create robots.txt** in `public/`:
```
User-agent: *
Allow: /

Sitemap: https://yourdomain.com/sitemap.xml
```

3. **Create sitemap.xml** in `public/`:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://yourdomain.com/</loc>
    <lastmod>2025-01-05</lastmod>
    <changefreq>monthly</changefreq>
    <priority>1.0</priority>
  </url>
</urlset>
```

## 🎯 Custom Domain

1. **Purchase domain** (Namecheap, GoDaddy, etc.)
2. **Point DNS** to your server:
   - A Record: `@` → Your Server IP
   - CNAME Record: `www` → `yourdomain.com`
3. **Update `.env`**:
```
APP_URL=https://yourdomain.com
```
4. **Clear cache**:
```bash
php artisan config:clear
php artisan cache:clear
```

## 🔄 Continuous Deployment

### GitHub Actions
Create `.github/workflows/deploy.yml`:
```yaml
name: Deploy
on:
  push:
    branches: [ main ]
jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      - name: Deploy to Server
        uses: appleboy/ssh-action@master
        with:
          host: ${{ secrets.HOST }}
          username: ${{ secrets.USERNAME }}
          key: ${{ secrets.SSH_KEY }}
          script: |
            cd /var/www/portfolio
            git pull origin main
            composer install --no-dev --optimize-autoloader
            npm install
            npm run build
            php artisan config:cache
            php artisan route:cache
            php artisan view:cache
```

## 📈 Performance Tips

1. **Enable Gzip Compression**
2. **Use CDN** for assets (optional)
3. **Optimize images** (if you add photos)
4. **Enable browser caching**
5. **Use HTTP/2**

## 🆘 Troubleshooting

### Issue: Styles not loading
**Solution**: Run `npm run build` and clear browser cache

### Issue: 500 Error
**Solution**: Check `.env` file exists and `APP_KEY` is set

### Issue: Permission denied
**Solution**: Set correct permissions on `storage/` and `bootstrap/cache/`

### Issue: White page
**Solution**: Enable debug mode temporarily to see error

---

## 🎉 You're Ready!

Your portfolio is now live and ready to impress potential employers and clients!

**Don't forget to**:
- ✅ Add your actual profile photo
- ✅ Test on multiple devices
- ✅ Share on social media
- ✅ Add to LinkedIn
- ✅ Include in job applications

Good luck! 🚀

