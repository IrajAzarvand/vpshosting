@extends('template')

@section('title', 'ثبت نام - سرویس ابری')

@section('description', 'ثبت نام در سرویس ابری - شروع استفاده از سرورهای VPS و خدمات میزبانی')

@section('additional_css')
<style>
    .register-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--primary-black) 0%, var(--secondary-black) 100%);
        position: relative;
        overflow: hidden;
        margin-top: 76px;
        /* Add margin to account for fixed header */
    }

    .register-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('https://images.pexels.com/photos/177598/pexels-photo-177598.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center/cover no-repeat;
        opacity: 0.1;
        z-index: 1;
    }

    .register-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(10, 10, 18, 0.9) 0%, rgba(21, 21, 34, 0.8) 100%);
        z-index: 2;
    }

    .register-card {
        background: linear-gradient(145deg, rgba(30, 30, 46, 0.9) 0%, rgba(21, 21, 34, 0.9) 100%);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(0, 170, 255, 0.2);
        backdrop-filter: blur(20px);
        position: relative;
        z-index: 3;
        width: 100%;
        max-width: 500px;
        margin: 2rem;
    }

    .register-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .register-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .register-logo i {
        font-size: 3rem;
        color: var(--neon-green);
        text-shadow: 0 0 20px rgba(0, 255, 157, 0.5);
        margin-left: 1rem;
    }

    .register-logo span {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-light);
    }

    .register-title {
        font-size: 1.8rem;
        color: var(--text-light);
        margin-bottom: 0.5rem;
    }

    .register-subtitle {
        color: var(--text-muted);
        font-size: 1rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        color: var(--text-light);
        margin-bottom: 0.5rem;
        font-weight: 500;
        font-size: 0.95rem;
    }

    .form-input {
        width: 100%;
        padding: 1rem 1.2rem;
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid rgba(0, 170, 255, 0.2);
        border-radius: 12px;
        color: var(--text-light);
        font-size: 1rem;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .form-input:focus {
        outline: none;
        border-color: var(--neon-green);
        box-shadow: 0 0 20px rgba(0, 255, 157, 0.3);
        background: rgba(255, 255, 255, 0.08);
    }

    .form-input::placeholder {
        color: var(--text-muted);
    }

    .password-field {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        font-size: 1.1rem;
        transition: color 0.3s ease;
    }

    .password-toggle:hover {
        color: var(--neon-green);
    }

    .password-field .form-input {
        padding-left: 3rem;
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .terms-checkbox {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 1.5rem;
    }

    .terms-checkbox input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: var(--neon-green);
        cursor: pointer;
    }

    .terms-checkbox label {
        color: var(--text-light);
        font-size: 0.9rem;
        cursor: pointer;
    }

    .terms-checkbox a {
        color: var(--electric-blue);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .terms-checkbox a:hover {
        color: var(--neon-green);
        text-shadow: 0 0 10px rgba(0, 255, 157, 0.5);
    }

    .register-btn {
        width: 100%;
        padding: 1rem 2rem;
        background: linear-gradient(135deg, var(--neon-green) 0%, var(--electric-blue) 100%);
        border: none;
        border-radius: 12px;
        color: var(--primary-black);
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }

    .register-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s ease;
    }

    .register-btn:hover::before {
        left: 100%;
    }

    .register-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 255, 157, 0.4);
    }

    .register-btn:active {
        transform: translateY(0);
    }

    .login-link {
        text-align: center;
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    .login-link a {
        color: var(--electric-blue);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .login-link a:hover {
        color: var(--neon-green);
        text-shadow: 0 0 10px rgba(0, 255, 157, 0.5);
    }

    .vps-illustration {
        position: absolute;
        top: 50%;
        right: 10%;
        transform: translateY(-50%);
        width: 300px;
        height: 300px;
        opacity: 0.1;
        z-index: 1;
        background: url('https://images.pexels.com/photos/325229/pexels-photo-325229.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center/cover no-repeat;
        border-radius: 50%;
        filter: blur(2px);
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        pointer-events: none;
    }

    .floating-element {
        position: absolute;
        width: 4px;
        height: 4px;
        background: var(--electric-blue);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
        top: 60%;
        left: 20%;
        animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
        top: 30%;
        right: 15%;
        animation-delay: 4s;
    }

    .floating-element:nth-child(4) {
        bottom: 20%;
        right: 25%;
        animation-delay: 1s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
            opacity: 0.7;
        }

        50% {
            transform: translateY(-20px) rotate(180deg);
            opacity: 1;
        }
    }

    @media (max-width: 768px) {
        .register-card {
            margin: 1rem;
            padding: 2rem;
        }

        .vps-illustration {
            display: none;
        }
    }
</style>
@endsection

@section('content')
<div class="register-container">
    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <!-- VPS Illustration -->
    <div class="vps-illustration"></div>

    <!-- Register Card -->
    <div class="register-card">
        <div class="register-header">
            <div class="register-logo">
                <i class="fas fa-server"></i>
                <span>سرویس ابری</span>
            </div>
            <h1 class="register-title">ثبت نام</h1>
            <p class="register-subtitle">حساب کاربری جدید ایجاد کنید</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="form-label">نام و نام خانوادگی</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="form-input @error('name') error @endif" placeholder="نام و نام خانوادگی خود را وارد کنید">
                @error('name')
                <div style="color: #ff6b6b; font-size: 0.85rem; margin-top: 0.5rem;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">ایمیل</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="form-input @error('email') error @endif" placeholder="example@email.com">
                @error('email')
                <div style="color: #ff6b6b; font-size: 0.85rem; margin-top: 0.5rem;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">رمز عبور</label>
                <div class="password-field">
                    <input id="password" type="password" name="password" required
                        class="form-input @error('password') error @endif" placeholder="رمز عبور خود را وارد کنید">
                    <button type="button" class="password-toggle" onclick="togglePassword('password')">
                        <i class="fas fa-eye" id="password-icon"></i>
                    </button>
                </div>
                @error('password')
                <div style="color: #ff6b6b; font-size: 0.85rem; margin-top: 0.5rem;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">تکرار رمز عبور</label>
                <div class="password-field">
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="form-input" placeholder="رمز عبور خود را مجدداً وارد کنید">
                    <button type="button" class="password-toggle" onclick="togglePassword('password_confirmation')">
                        <i class="fas fa-eye" id="password_confirmation-icon"></i>
                    </button>
                </div>
            </div>

            <!-- Terms and Conditions -->
            <div class="terms-checkbox">
                <input id="terms" type="checkbox" name="terms" required>
                <label for="terms">
                    با <a href="#" target="_blank">قوانین و شرایط</a> استفاده از سرویس موافقم
                </label>
            </div>

            <!-- Register Button -->
            <button type="submit" class="register-btn">
                <i class="fas fa-user-plus" style="margin-left: 0.5rem;"></i>
                ایجاد حساب کاربری
            </button>
        </form>

        <!-- Login Link -->
        <div class="login-link">
            قبلاً حساب کاربری دارید؟
            <a href="{{ route('login') }}">ورود کنید</a>
        </div>
    </div>
</div>
@endsection

@section('additional_scripts')
<script>
    function togglePassword(fieldId) {
        const passwordInput = document.getElementById(fieldId);
        const passwordIcon = document.getElementById(fieldId + '-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }

    // Add floating animation to form inputs
    document.addEventListener('DOMContentLoaded', function() {
        const inputs = document.querySelectorAll('.form-input');

        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.style.transform = 'scale(1)';
            });
        });
    });
</script>
@endsection