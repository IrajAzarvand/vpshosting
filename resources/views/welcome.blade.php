<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="ارائه دهنده سرویس های VPS و هاستینگ حرفه ای با پشتیبانی 24/7 - میزبانی ابری با uptime 99.9%">
    <title>سرویس های VPS حرفه ای - میزبانی ابری با عملکرد بالا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
                    <li><a href="#home">خانه</a></li>
                    <li><a href="#features">امکانات</a></li>
                    <li><a href="#pricing">تعرفه ها</a></li>
                    <li><a href="#testimonials">نظرات</a></li>
                    <li><a href="#contact">تماس با ما</a></li>
                </ul>
            </nav>

            <div class="nav-btns">
                <a href="{{ route('login') }}" class="btn btn-outline">ورود</a>
                <a href="{{ route('register') }}" class="btn btn-primary">ثبت نام</a>
            </div>

            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>سرورهای <span>VPS</span> پرسرعت با uptime 99.9%</h1>
            <p>با سرویس های ابری ما، وبسایت خود را با بالاترین سرعت و امنیت میزبانی کنید. پشتیبانی 24/7 و گارانتی بازگشت
                وجه در 30 روز</p>
            <div class="hero-btns">
                <a href="#" class="btn btn-primary">شروع کنید</a>
                <a href="#" class="btn btn-outline">بیشتر بدانید</a>
            </div>
        </div>
        <div class="hero-image lazy-load">
            <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22800%22%20height%3D%22600%22%20viewBox%3D%220%200%20800%20600%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15fce498632%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15fce498632%22%3E%3Crect%20width%3D%22800%22%20height%3D%22600%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285%22%20y%3D%22321%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                data-src="https://images.pexels.com/photos/205316/pexels-photo-205316.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="سرورهای VPS" />
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="section-title">
            <h2>چرا <span>سرویس های ما</span>؟</h2>
            <p>با ویژگی های منحصر به فرد ما، میزبانی وب را به تجربه ای لذت بخش تبدیل کنید</p>
        </div>

        <div class="features-grid">
            <div class="feature-card lazy-load">
                <div class="feature-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>سرعت فوق العاده</h3>
                <p>با استفاده از آخرین فناوری های SSD و پردازنده های Intel Xeon، سرعت لود وبسایت شما را به حداکثر می
                    رسانیم</p>
            </div>

            <div class="feature-card lazy-load">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>امنیت پیشرفته</h3>
                <p>با فایروال های پیشرفته، مانیتورینگ دائمی و بکاپ خودکار، خیالتان از امنیت داده ها راحت باشد</p>
            </div>

            <div class="feature-card lazy-load">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>پشتیبانی 24/7</h3>
                <p>تیم پشتیبانی ما به صورت 24 ساعته و 7 روز هفته آماده پاسخگویی به سوالات و حل مشکلات شما هستند</p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="section-title">
            <h2>تعرفه های <span>خدمات</span></h2>
            <p>پلن های متنوع با قیمت های مناسب برای نیازهای مختلف</p>
        </div>

        <div class="pricing-grid">
            <div class="pricing-card lazy-load">
                <div class="pricing-header">
                    <h3 class="pricing-name">پلن پایه</h3>
                    <div class="price">59,000 <span>تومان/ماه</span></div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> 1 هسته پردازنده</li>
                    <li><i class="fas fa-check"></i> 2 گیگابایت رم</li>
                    <li><i class="fas fa-check"></i> 40 گیگابایت فضای SSD</li>
                    <li><i class="fas fa-check"></i> ترافیک نامحدود</li>
                    <li><i class="fas fa-check"></i> پشتیبانی 24/7</li>
                </ul>
                <a href="#" class="btn btn-primary">خرید پلن</a>
            </div>

            <div class="pricing-card popular lazy-load">
                <div class="pricing-header">
                    <h3 class="pricing-name">پلن حرفه ای</h3>
                    <div class="price">119,000 <span>تومان/ماه</span></div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> 2 هسته پردازنده</li>
                    <li><i class="fas fa-check"></i> 4 گیگابایت رم</li>
                    <li><i class="fas fa-check"></i> 80 گیگابایت فضای SSD</li>
                    <li><i class="fas fa-check"></i> ترافیک نامحدود</li>
                    <li><i class="fas fa-check"></i> پشتیبانی 24/7</li>
                </ul>
                <a href="#" class="btn btn-primary">خرید پلن</a>
            </div>

            <div class="pricing-card lazy-load">
                <div class="pricing-header">
                    <h3 class="pricing-name">پلن enterprise</h3>
                    <div class="price">229,000 <span>تومان/ماه</span></div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> 4 هسته پردازنده</li>
                    <li><i class="fas fa-check"></i> 8 گیگابایت رم</li>
                    <li><i class="fas fa-check"></i> 160 گیگابایت فضای SSD</li>
                    <li><i class="fas fa-check"></i> ترافیک نامحدود</li>
                    <li><i class="fas fa-check"></i> پشتیبانی 24/7</li>
                </ul>
                <a href="#" class="btn btn-primary">خرید پلن</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="section-title">
            <h2>نظرات <span>مشتریان</span></h2>
            <p>مشتریان ما چه می گویند؟</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card lazy-load">
                <p class="testimonial-text">"از زمانی که به سرویس VPS این شرکت کوچ کردم، سرعت وبسایت من 3 برابر شده است.
                    پشتیبانی فوق العاده پاسخگو و حرفه ای دارند."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">م.ر</div>
                    <div class="author-details">
                        <h4>محمد رضایی</h4>
                        <p>مدیر وبسایت آموزشی</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card lazy-load">
                <p class="testimonial-text">"تیم پشتیبانی 24 ساعته واقعاً به درد من خورد. یکبار نصف شب مشکل پیش اومد و
                    در کمتر از 15 دقیقه مشکل رو برطرف کردند."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">ف.ن</div>
                    <div class="author-details">
                        <h4>فاطمه نوروزی</h4>
                        <p>توسعه دهنده وب</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card lazy-load">
                <p class="testimonial-text">"قیمت های بسیار مناسبی نسبت به کیفیت سرویس ارائه شده دارن. من سه ساله که
                    مشتری این شرکت هستم و هیچوقت قطعی نداشتم."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">ع.ح</div>
                    <div class="author-details">
                        <h4>علی حسینی</h4>
                        <p>مدیر فروشگاه اینترنتی</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <li><a href="#">خانه</a></li>
                    <li><a href="#">امکانات</a></li>
                    <li><a href="#">تعرفه ها</a></li>
                    <li><a href="#">نظرات</a></li>
                    <li><a href="#">تماس با ما</a></li>
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
            <p>© 2023 کلیه حقوق برای سرویس ابری محفوظ است.</p>
        </div>
    </footer>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>