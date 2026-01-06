# Mohammed Rabil T - Portfolio Website

A modern, responsive portfolio website built with Laravel 11 and Tailwind CSS v4.

## 🎨 Features

- **Modern Design**: Gradient backgrounds, smooth animations, and glass-morphism effects
- **Fully Responsive**: Optimized for all devices (mobile, tablet, desktop)
- **Dark Mode Ready**: Automatic dark mode support
- **Smooth Scrolling**: Seamless navigation between sections
- **Interactive Sections**:
  - Hero section with animated profile
  - About Me with statistics cards
  - Skills showcase with categorized tech stack
  - Work Experience timeline
  - Featured Projects gallery
  - Education section
  - Contact form with direct email integration

## 🚀 Getting Started

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm

### Installation

1. **Install PHP Dependencies**
```bash
composer install
```

2. **Install Node Dependencies**
```bash
npm install
```

3. **Set up Environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Build Assets**
```bash
npm run build
```

### Development

To run the development server with hot reload:

**Terminal 1 - Laravel Server:**
```bash
php artisan serve
```

**Terminal 2 - Vite Dev Server:**
```bash
npm run dev
```

Then visit: `http://localhost:8000`

## 📁 Project Structure

```
portfolio/
├── resources/
│   ├── views/
│   │   └── welcome.blade.php    # Main portfolio page
│   ├── css/
│   │   └── app.css              # Custom styles + Tailwind
│   └── js/
│       └── app.js               # JavaScript animations
├── routes/
│   └── web.php                  # Routes (already configured)
└── public/
    └── build/                   # Compiled assets (after build)
```

## 🎯 Sections Included

1. **Hero Section** - Introduction with profile image and social links
2. **About Me** - Professional summary with key statistics
3. **Skills** - Backend, Frontend, and Tools categorized
4. **Experience** - Timeline of work history
5. **Projects** - Showcase of major projects (NEXUS, EDUCATOR, IAME, Parambadan, Zeacut)
6. **Education** - Academic background
7. **Contact** - Contact form and information

## 🎨 Customization

### Colors
The portfolio uses a gradient color scheme. Main colors:
- Primary: Blue (#667eea to #764ba2)
- Secondary: Purple to Pink
- Accents: Various gradient combinations

### Fonts
- Headings: Space Grotesk (Google Fonts)
- Body: Inter (Google Fonts)

### Profile Image
Currently using an SVG placeholder. To add your photo:
1. Place your image in `public/images/profile.jpg`
2. Update line 67 in `welcome.blade.php`:
```php
<img src="{{ asset('images/profile.jpg') }}" alt="Mohammed Rabil">
```

## 📧 Contact Form

The contact form opens the user's default email client with pre-filled information. No backend setup required!

## 🌐 Deployment

### Production Build

```bash
npm run build
```

This creates optimized assets in `public/build/`

### Deploy to Production

1. Upload all files to your server
2. Point web server to `/public` directory
3. Run `composer install --no-dev --optimize-autoloader`
4. Run `php artisan config:cache`
5. Run `php artisan route:cache`
6. Run `php artisan view:cache`

## 📱 Social Links

Update social links in `welcome.blade.php`:
- GitHub: Line 80, 360
- LinkedIn: Line 83, 365
- Email: Line 86, 390

## 🔧 Technologies Used

- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS v4
- **Build Tool**: Vite
- **Icons**: Heroicons (inline SVG)
- **Fonts**: Google Fonts (Inter, Space Grotesk)

## 📝 License

This portfolio is open-source and free to use.

## 👤 Author

**Mohammed Rabil T**
- Email: mohammedrabil.work@gmail.com
- GitHub: [@rabil007](https://github.com/rabil007)
- LinkedIn: [Mohammed Rabil](https://www.linkedin.com/in/mohammed-rabil-2805b122a/)

---

Built with ❤️ using Laravel & Tailwind CSS

