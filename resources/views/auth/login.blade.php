@extends('template')

@section('title', 'ورود به حساب کاربری - سرویس ابری')

@section('description', 'ورود به پنل مدیریت سرویس ابری - دسترسی به سرورهای VPS و خدمات میزبانی')

@section('additional_css')
<style>
    .login-container {
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

    .login-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center/cover no-repeat;
        opacity: 0.1;
        z-index: 1;
    }

    .login-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(10, 10, 18, 0.9) 0%, rgba(21, 21, 34, 0.8) 100%);
        z-index: 2;
    }

    .login-card {
        background: linear-gradient(145deg, rgba(30, 30, 46, 0.9) 0%, rgba(21, 21, 34, 0.9) 100%);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(0, 170, 255, 0.2);
        backdrop-filter: blur(20px);
        position: relative;
        z-index: 3;
        width: 100%;
        max-width: 450px;
        margin: 2rem;
    }

    .login-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .login-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .login-logo i {
        font-size: 3rem;
        color: var(--neon-green);
        text-shadow: 0 0 20px rgba(0, 255, 157, 0.5);
        margin-left: 1rem;
    }

    .login-logo span {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-light);
    }

    .login-title {
        font-size: 1.8rem;
        color: var(--text-light);
        margin-bottom: 0.5rem;
    }

    .login-subtitle {
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

    .remember-me {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .remember-me input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: var(--neon-green);
        cursor: pointer;
    }

    .remember-me label {
        color: var(--text-light);
        font-size: 0.9rem;
        cursor: pointer;
    }

    .forgot-password {
        color: var(--electric-blue);
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .forgot-password:hover {
        color: var(--neon-green);
        text-shadow: 0 0 10px rgba(0, 255, 157, 0.5);
    }

    .login-btn {
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

    .login-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s ease;
    }

    .login-btn:hover::before {
        left: 100%;
    }

    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 255, 157, 0.4);
    }

    .login-btn:active {
        transform: translateY(0);
    }

    .register-link {
        text-align: center;
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    .register-link a {
        color: var(--electric-blue);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .register-link a:hover {
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
        background: url('https://images.pexels.com/photos/205316/pexels-photo-205316.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') center/cover no-repeat;
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
        background: var(--neon-green);
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
        .login-card {
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
<div class="login-container">
    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <!-- VPS Illustration -->
    <div class="vps-illustration"></div>

    <!-- Login Card -->
    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">
                <i class="fas fa-server"></i>
                <span>سرویس ابری</span>
            </div>
            <h1 class="login-title">خوش آمدید</h1>
            <p class="login-subtitle">برای دسترسی به پنل مدیریت وارد شوید</p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
        <div class="alert alert-success"
            style="background: rgba(0, 255, 157, 0.1); border: 1px solid var(--neon-green); color: var(--neon-green); padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; text-align: center;">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">ایمیل</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
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
                    <button type="button" class="password-toggle" onclick="togglePassword()">
                        <i class="fas fa-eye" id="password-icon"></i>
                    </button>
                </div>
                @error('password')
                <div style="color: #ff6b6b; font-size: 0.85rem; margin-top: 0.5rem;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="form-options">
                <div class="remember-me">
                    <input id="remember" type="checkbox" name="remember">
                    <label for="remember">مرا به خاطر بسپار</label>
                </div>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-password">
                    فراموشی رمز عبور؟
                </a>
                @endif
            </div>

            <!-- Login Button -->
            <button type="submit" class="login-btn">
                <i class="fas fa-sign-in-alt" style="margin-left: 0.5rem;"></i>
                ورود به حساب کاربری
            </button>
        </form>

        <!-- Register Link -->
        @if (Route::has('register'))
        <div class="register-link">
            حساب کاربری ندارید؟
            <a href="{{ route('register') }}">ثبت نام کنید</a>
        </div>
        @endif
    </div>
</div>
@endsection

@section('additional_scripts')
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.getElementById('password-icon');

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