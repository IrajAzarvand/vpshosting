<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'سرویس های VPS حرفه ای - میزبانی ابری با عملکرد بالا')">
    <title>@yield('title', 'سرویس های VPS حرفه ای - میزبانی ابری با عملکرد بالا')</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @yield('additional_css')
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="header-container">
            <div class="logo">
                <i class="fas fa-server"></i>
                <span>سرویس ابری</span>
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">خانه</a></li>
                    <li><a href="{{ route('home') }}#features">امکانات</a></li>
                    <li><a href="{{ route('home') }}#pricing">تعرفه ها</a></li>
                    <li><a href="{{ route('home') }}#testimonials">نظرات</a></li>
                    <li><a href="{{ route('home') }}#contact">تماس با ما</a></li>
                </ul>
            </nav>

            <div class="nav-btns">
                @auth
                <a href="{{ route('dashboard') }}" class="btn btn-outline">داشبورد</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-outline">ورود</a>
                <a href="{{ route('register') }}" class="btn btn-primary">ثبت نام</a>
                @endauth
            </div>

            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>درباره ما</h3>
                <p>ما با بیش از 10 سال تجربه در زمینه میزبانی وب و سرویس های ابری، به هزاران مشتری در سراسر ایران خدمات
                    ارائه داده ایم.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>لینک های سریع</h3>
                <ul>
                    <li><a href="{{ route('home') }}">خانه</a></li>
                    <li><a href="{{ route('home') }}#features">امکانات</a></li>
                    <li><a href="{{ route('home') }}#pricing">تعرفه ها</a></li>
                    <li><a href="{{ route('home') }}#testimonials">نظرات</a></li>
                    <li><a href="{{ route('home') }}#contact">تماس با ما</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>خدمات ما</h3>
                <ul>
                    <li><a href="#">هاستینگ اشتراکی</a></li>
                    <li><a href="#">سرورهای VPS</a></li>
                    <li><a href="#">سرورهای اختصاصی</a></li>
                    <li><a href="#">میزبانی ابری</a></li>
                    <li><a href="#">ثبت دامنه</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>تماس با ما</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> تهران، خیابان آزادی، دانشگاه شریف</li>
                    <li><i class="fas fa-phone"></i> 021-12345678</li>
                    <li><i class="fas fa-envelope"></i> iraj.azarvand@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>© {{ date('Y') }} کلیه حقوق برای سرویس ابری محفوظ است.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    @yield('additional_scripts')
</body>

</html>