# 🚀 Quick Start Guide

Get your portfolio running in 3 simple steps!

## Step 1: Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

## Step 2: Setup Environment

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

## Step 3: Run Development Server

Open **TWO terminal windows**:

### Terminal 1: Laravel Server
```bash
php artisan serve
```

### Terminal 2: Vite (for CSS/JS)
```bash
npm run dev
```

## 🎉 Done!

Visit **http://localhost:8000** in your browser!

---

## 🏗️ For Production

Build optimized assets:
```bash
npm run build
```

Then deploy the entire project to your hosting server.

---

## 🎨 Customization Tips

1. **Add Your Photo**: Replace the SVG placeholder in `resources/views/welcome.blade.php` (line 67)
2. **Update Projects**: Add your project screenshots in the Projects section
3. **Change Colors**: Modify gradient colors in the `<style>` section
4. **Add More Sections**: Easy to extend - just copy a section and modify

---

## 📧 Need Help?

- Check `PORTFOLIO_README.md` for detailed documentation
- Email: mohammedrabil.work@gmail.com

Happy Coding! 💻✨

