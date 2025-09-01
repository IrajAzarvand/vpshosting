@extends('template')

@section('title', 'درباره ما - سرویس ابری')

@section('description', 'درباره سرویس ابری و تیم ما - بیش از 10 سال تجربه در زمینه میزبانی وب')

@section('content')
<!-- About Hero Section -->
<section class="hero" style="margin-top: 76px; min-height: 60vh;">
    <div class="hero-content">
        <h1>درباره <span>سرویس ابری</span></h1>
        <p>ما با بیش از 10 سال تجربه در زمینه میزبانی وب و سرویس های ابری، به هزاران مشتری در سراسر ایران خدمات ارائه
            داده ایم.</p>
    </div>
</section>

<!-- About Content -->
<section class="features" style="background: linear-gradient(rgba(10, 10, 18, 0.85), rgba(21, 21, 34, 0.85));">
    <div class="section-title">
        <h2>تاریخچه <span>ما</span></h2>
        <p>از سال 2013 تاکنون، ما در حال ارائه بهترین خدمات میزبانی وب بوده ایم</p>
    </div>

    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-rocket"></i>
            </div>
            <h3>شروع کار</h3>
            <p>در سال 2013، ما با هدف ارائه خدمات میزبانی وب با کیفیت بالا شروع به کار کردیم.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-users"></i>
            </div>
            <h3>رشد و توسعه</h3>
            <p>در طول سالیان، ما به بیش از 10,000 مشتری خدمات ارائه داده ایم.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-award"></i>
            </div>
            <h3>دستاوردها</h3>
            <p>ما افتخار داریم که به عنوان یکی از بهترین ارائه دهندگان خدمات VPS شناخته شویم.</p>
        </div>
    </div>
</section>
@endsection