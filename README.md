# VPS Hosting Laravel Application

A beautiful and modern VPS hosting website built with Laravel 12, featuring custom authentication pages with VPS-themed design.

## 🚀 Features

### **Frontend Design**
- **VPS-Themed Design:** Dark gradient backgrounds with server-related imagery
- **Responsive Layout:** Mobile-friendly design that works on all devices
- **Modern Animations:** Shiny button effects, floating particles, and smooth transitions
- **Persian/Farsi Support:** RTL layout with proper Persian typography

### **Authentication System**
- **Custom Login Page:** Beautiful login form with password visibility toggle
- **Custom Register Page:** Registration form with terms and conditions
- **Secure Authentication:** Laravel's built-in authentication with custom controllers
- **Dashboard Access:** Protected dashboard for authenticated users

### **Technical Features**
- **Laravel 12:** Latest Laravel framework with modern PHP practices
- **Blade Templating:** Reusable layout system with `@extends` and `@yield`
- **Asset Management:** External CSS and JavaScript files for better performance
- **Route Protection:** Proper middleware implementation for guest/auth routes

## 🎨 Design Highlights

### **Login/Register Pages**
- Glassmorphism card design with backdrop blur
- Neon green and electric blue color scheme
- Floating animated elements
- Password visibility toggle functionality
- Form input scaling animations
- VPS-related background images

### **Welcome Page**
- Hero section with VPS server imagery
- Feature cards with icons and descriptions
- Pricing plans section
- Testimonials section
- Responsive navigation menu

## 📁 Project Structure

```
vpshosting/
├── app/Http/Controllers/Auth/
│   ├── LoginController.php      # Custom login controller
│   └── RegisterController.php   # Custom register controller
├── resources/views/
│   ├── auth/
│   │   ├── login.blade.php      # Custom login page
│   │   └── register.blade.php   # Custom register page
│   ├── template.blade.php        # Reusable layout template
│   └── welcome.blade.php         # Home page
├── public/
│   ├── css/styles.css            # External CSS styles
│   └── js/scripts.js             # External JavaScript
└── routes/
    ├── auth.php                  # Authentication routes
    └── web.php                   # Web routes
```

## 🛠️ Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/vpshosting.git
   cd vpshosting
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup:**
   ```bash
   php artisan migrate
   ```

5. **Start the development server:**
   ```bash
   php artisan serve
   ```

## 🌟 Key Features Implemented

### **Custom Authentication Pages**
- ✅ Beautiful VPS-themed login page
- ✅ Custom registration form
- ✅ Password visibility toggle
- ✅ Form validation and error handling
- ✅ Responsive design for all devices

### **Layout System**
- ✅ Reusable Blade template layout
- ✅ Dynamic titles and descriptions
- ✅ External CSS and JavaScript files
- ✅ Proper asset management

### **Navigation**
- ✅ Fixed header with proper spacing
- ✅ Login/Register button links
- ✅ Responsive mobile menu
- ✅ Smooth scrolling navigation

## 🎯 Usage

1. **Home Page:** Visit `/` to see the VPS hosting landing page
2. **Login:** Click "ورود" or visit `/login` for the custom login page
3. **Register:** Click "ثبت نام" or visit `/register` for the custom register page
4. **Dashboard:** After authentication, users are redirected to `/dashboard`

## 🔧 Customization

### **Colors**
The application uses CSS custom properties for easy color customization:
```css
:root {
    --primary-black: #0a0a12;
    --secondary-black: #151522;
    --neon-green: #00ff9d;
    --electric-blue: #00aaff;
    --text-light: #ffffff;
    --text-muted: #a0a0a0;
}
```

### **Styling**
- Modify `public/css/styles.css` for global styles
- Update individual page styles in the `@section('additional_css')` blocks
- Customize animations and effects in the JavaScript files

## 📱 Responsive Design

The application is fully responsive and works on:
- Desktop computers
- Tablets
- Mobile phones
- All modern browsers

## 🚀 Deployment

For production deployment:
1. Set up your web server (Apache/Nginx)
2. Configure your database
3. Set `APP_ENV=production` in `.env`
4. Run `php artisan config:cache`
5. Set up proper file permissions

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

**Built with ❤️ using Laravel 12 and modern web technologies**
