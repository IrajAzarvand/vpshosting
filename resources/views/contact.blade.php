@extends('template')

@section('title', 'تماس با ما - سرویس ابری')

@section('description', 'با ما در تماس باشید - پشتیبانی 24/7 برای سرویس های VPS و میزبانی ابری')

@section('additional_css')
<style>
    .contact {
        padding: 8rem 5%;
        background: linear-gradient(rgba(10, 10, 18, 0.85), rgba(21, 21, 34, 0.85)),
            url('/storage/images/contact-bg.jpg') center/cover no-repeat;
        min-height: 100vh;
        margin-top: 76px;
    }

    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .contact-info {
        background: linear-gradient(145deg, rgba(30, 30, 46, 0.8) 0%, rgba(21, 21, 34, 0.8) 100%);
        border-radius: 16px;
        padding: 2.5rem;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(0, 170, 255, 0.15);
        backdrop-filter: blur(10px);
    }

    .contact-info h2 {
        color: var(--neon-green);
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
    }

    .contact-info p {
        color: var(--text-muted);
        margin-bottom: 2rem;
        line-height: 1.8;
    }

    .contact-details {
        margin-top: 2rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(145deg, var(--dark-blue) 0%, var(--electric-blue) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 1rem;
        color: white;
        font-size: 1.2rem;
        box-shadow: 0 0 15px rgba(0, 170, 255, 0.3);
    }

    .contact-text h4 {
        color: var(--text-light);
        margin-bottom: 5px;
        font-size: 1.1rem;
    }

    .contact-text p {
        color: var(--text-muted);
        margin: 0;
    }

    .contact-form {
        background: linear-gradient(145deg, rgba(30, 30, 46, 0.8) 0%, rgba(21, 21, 34, 0.8) 100%);
        border-radius: 16px;
        padding: 2.5rem;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(0, 170, 255, 0.15);
        backdrop-filter: blur(10px);
    }

    .contact-form h2 {
        color: var(--neon-green);
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        color: var(--text-light);
        margin-bottom: 0.5rem;
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 6px;
        background: rgba(10, 10, 18, 0.6);
        color: var(--text-light);
        font-family: 'Vazirmatn', sans-serif;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--electric-blue);
        box-shadow: 0 0 10px rgba(0, 170, 255, 0.3);
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    /* Cloudflare-like CAPTCHA Styles */
    .cloudflare-captcha {
        background: rgba(10, 10, 18, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 6px;
        padding: 15px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .cloudflare-captcha:hover {
        background: rgba(10, 10, 18, 0.8);
    }

    .cloudflare-captcha.verified {
        border-color: var(--neon-green);
        background: rgba(0, 255, 157, 0.1);
    }

    .cloudflare-checkbox {
        width: 18px;
        height: 18px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 3px;
        margin-left: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .cloudflare-captcha.verified .cloudflare-checkbox {
        background: var(--neon-green);
        border-color: var(--neon-green);
    }

    .cloudflare-checkbox i {
        color: white;
        font-size: 12px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .cloudflare-captcha.verified .cloudflare-checkbox i {
        opacity: 1;
    }

    .cloudflare-text {
        color: var(--text-light);
        font-size: 0.95rem;
    }

    .cloudflare-logo {
        margin-right: auto;
        display: flex;
        align-items: center;
        color: var(--text-muted);
        font-size: 0.8rem;
    }

    .cloudflare-logo img {
        width: 16px;
        height: 16px;
        margin-left: 5px;
    }

    .alert {
        padding: 12px 15px;
        border-radius: 6px;
        margin-bottom: 1.5rem;
    }

    .alert-success {
        background: rgba(0, 255, 157, 0.1);
        border: 1px solid var(--neon-green);
        color: var(--neon-green);
    }

    .alert-danger {
        background: rgba(255, 0, 0, 0.1);
        border: 1px solid #ff4757;
        color: #ff4757;
    }

    .invalid-feedback {
        color: #ff4757;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
    }

    @media (max-width: 968px) {
        .contact-container {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<section class="contact" id="contact">
    <div class="contact-container">
        <div class="contact-info">
            <h2>با ما در تماس باشید</h2>
            <p>تیم پشتیبانی ما 24 ساعته و 7 روز هفته آماده پاسخگویی به سوالات و حل مشکلات شما هستند. از طریق فرم مقابل
                یا اطلاعات تماس زیر با ما در ارتباط باشید.</p>

            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>آدرس</h4>
                        <p>تهران، خیابان آزادی، университет شریف</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">
                        <h4>تلفن</h4>
                        <p>021-12345678</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h4>ایمیل</h4>
                        <p>info@example.com</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-text">
                        <h4>ساعات کاری</h4>
                        <p>24/7 همه روزه</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h2>فرم تماس با ما</h2>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                @csrf

                <div class="form-group">
                    <label for="name">نام کامل</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">تلفن (اختیاری)</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subject">موضوع</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}"
                        required>
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="message">پیام</label>
                    <textarea class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Cloudflare-like CAPTCHA -->
                <div class="form-group">
                    <label>تأیید هویت</label>
                    <div class="cloudflare-captcha" id="cloudflareCaptcha">
                        <div class="cloudflare-checkbox">
                            <i class="fas fa-check"></i>
                        </div>
                        <span class="cloudflare-text">من ربات نیستم</span>
                        <div class="cloudflare-logo">
                            <img src="https://www.cloudflare.com/favicon.ico" alt="Cloudflare">
                            <span>Protected by Cloudflare</span>
                        </div>
                    </div>
                    <!-- Hidden field to store verification status -->
                    <input type="hidden" name="is_human" id="isHuman" value="0">
                    @error('is_human')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" id="submitButton" style="width: 100%">
                    ارسال پیام
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('additional_scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const captcha = document.getElementById('cloudflareCaptcha');
        const isHumanInput = document.getElementById('isHuman');
        const submitButton = document.getElementById('submitButton');
        const contactForm = document.getElementById('contactForm');
        let verified = false;

        captcha.addEventListener('click', function() {
            if (!verified) {
                // Simulate verification process
                this.classList.add('verifying');

                // After a short delay, mark as verified
                setTimeout(() => {
                    this.classList.remove('verifying');
                    this.classList.add('verified');
                    verified = true;
                    isHumanInput.value = "1"; // Set the hidden input value to indicate verification

                    // Change text after verification
                    this.querySelector('.cloudflare-text').textContent = 'شما تأیید شدید';
                }, 1500);
            }
        });

        // Form submission validation
        contactForm.addEventListener('submit', function(e) {
            if (!verified) {
                e.preventDefault();
                alert('لطفاً تأیید کنید که ربات نیستید');
            }
        });
    });
</script>
@endsection