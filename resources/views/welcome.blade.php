@extends('template')

@section('title', 'سرویس های VPS حرفه ای - میزبانی ابری با عملکرد بالا')

@section('description', 'ارائه دهنده سرویس های VPS و هاستینگ حرفه ای با پشتیبانی 24/7 - میزبانی ابری با uptime 99.9%')

@section('content')

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1>سرورهای <span>VPS</span> پرسرعت با uptime ۹۹.۹%</h1>
        <p>با سرویس های ابری ما، وبسایت خود را با بالاترین سرعت و امنیت میزبانی کنید. پشتیبانی ۲۴/۷ و گارانتی بازگشت
            وجه در ۳۰ روز</p>
        <div class="hero-btns">
            <a href="#" class="btn btn-primary">شروع کنید</a>
            <a href="#" class="btn btn-outline">بیشتر بدانید</a>
        </div>
    </div>
    <div class="hero-image lazy-load">
        <img src="{{ asset('storage/images/vps-servers2.jpg') }}" alt="سرورهای VPS" />
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
            <h3>پشتیبانی ۲۴/۷</h3>
            <p>تیم پشتیبانی ما به صورت ۲۴ ساعته و ۷ روز هفته آماده پاسخگویی به سوالات و حل مشکلات شما هستند</p>
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
                <div class="price">۵۹.۰۰۰ <span>تومان/ماه</span></div>
            </div>
            <ul class="pricing-features">
                <li><i class="fas fa-check"></i> ۱ هسته پردازنده</li>
                <li><i class="fas fa-check"></i> ۲ گیگابایت رم</li>
                <li><i class="fas fa-check"></i> ۴۰ گیگابایت فضای SSD</li>
                <li><i class="fas fa-check"></i> ترافیک نامحدود</li>
                <li><i class="fas fa-check"></i> پشتیبانی ۲۴/۷</li>
            </ul>
            <a href="#" class="btn btn-primary">خرید پلن</a>
        </div>

        <div class="pricing-card popular lazy-load">
            <div class="pricing-header">
                <h3 class="pricing-name">پلن حرفه ای</h3>
                <div class="price">۱۱۹.۰۰۰ <span>تومان/ماه</span></div>
            </div>
            <ul class="pricing-features">
                <li><i class="fas fa-check"></i> ۲ هسته پردازنده</li>
                <li><i class="fas fa-check"></i> ۴ گیگابایت رم</li>
                <li><i class="fas fa-check"></i> ۸۰ گیگابایت فضای SSD</li>
                <li><i class="fas fa-check"></i> ترافیک نامحدود</li>
                <li><i class="fas fa-check"></i> پشتیبانی ۲۴/۷</li>
            </ul>
            <a href="#" class="btn btn-primary">خرید پلن</a>
        </div>

        <div class="pricing-card lazy-load">
            <div class="pricing-header">
                <h3 class="pricing-name">پلن enterprise</h3>
                <div class="price">۲۲۹.۰۰۰ <span>تومان/ماه</span></div>
            </div>
            <ul class="pricing-features">
                <li><i class="fas fa-check"></i> ۴ هسته پردازنده</li>
                <li><i class="fas fa-check"></i> ۸ گیگابایت رم</li>
                <li><i class="fas fa-check"></i> ۱۶۰ گیگابایت فضای SSD</li>
                <li><i class="fas fa-check"></i> ترافیک نامحدود</li>
                <li><i class="fas fa-check"></i> پشتیبانی ۲۴/۷</li>
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
            <p class="testimonial-text">"از زمانی که به سرویس VPS این شرکت کوچ کردم، سرعت وبسایت من ۳ برابر شده است.
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
            <p class="testimonial-text">"تیم پشتیبانی ۲۴ ساعته واقعاً به درد من خورد. یکبار نصف شب مشکل پیش اومد و
                در کمتر از ۱۵ دقیقه مشکل رو برطرف کردند."</p>
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

@endsection