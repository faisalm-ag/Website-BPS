@extends('layouts.app')

@section('title', 'Login')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<div class="login-container">
    <div class="login-card">
        <div class="row g-0">
            <!-- Left Section - Blue Background -->
            <div class="col-md-6 blue-section">
                <div class="content-left">
                    <!-- Logo BPS -->
                    <div class="logo-container">
                        <div class="logo-bps">
                            <div class="logo-icon">
                                <img src="{{ asset('foto/Logo_BPS.png') }}" alt="Logo BPS" class="logo-img logo-anim">
                            </div>
                            <div class="logo-text">
                                <span class="text-white">BADAN PUSAT STATISTIK</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Title -->
                    <h1 class="main-title text-white">SINGLE SIGN-ON BPS</h1>
                    <p class="subtitle text-white">Enter your ID and<br>Password to continue</p>
                </div>
            </div>

            <!-- Right Section - Login Form -->
            <div class="col-md-6 white-section">
                <div id="login-form" class="login-form-wrapper form-hidden">
                    <div class="form-header">
                        <h2 class="signin-title">SIGN IN</h2>
                        <p class="signin-subtitle">TO ACCESS APPLICATION</p>
                    </div>

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login.post') }}" class="login-form">
                        @csrf
                        <!-- Username -->
                        <div class="input-group-custom">
                            <input type="text" name="username" class="form-control-custom" 
                                   placeholder="Username" value="{{ old('username') }}" required autofocus>
                            @error('username')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="input-group-custom" style="position: relative;">
                            <input type="password" name="password" id="password" class="form-control-custom" placeholder="Password" required>
                            <i class="fa-solid fa-eye" id="togglePassword"></i>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Error global -->
                        @if($errors->has('username'))
                            <div class="alert alert-danger p-2">
                                {{ $errors->first('username') }}
                            </div>
                        @endif

                        <!-- Login Button -->
                        <button type="submit" class="btn-login">
                            Log In
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Password toggle + animasi logo -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const form = document.getElementById('login-form');

        // Toggle password
        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // Spawn form bareng animasi logo
        setTimeout(() => {
            form.classList.remove("form-hidden");
            form.classList.add("form-show");
        }, 300); // sedikit delay biar bareng logo
    });
</script>

<!-- Custom CSS -->
<style>
    .login-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    .login-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 100%;
        max-width: 900px;
        min-height: 300px;
    }

    /* Left Section - Blue */
    .blue-section {
        background: linear-gradient(135deg, #2c3e50 0%, #2c3e50 100%);
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 30px;
    }

    .content-left {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
    }

    /* Logo BPS */
    .logo-container {
        margin-bottom: 50px;
    }

    .logo-bps {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 8px;
    }

    .logo-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .logo-img {
        width: 50px;
        height: 50px;
        object-fit: contain;
        position: absolute;
        top: 0;
        left: 0;
    }

    /* Logo Animasi - start fullscreen, mengecil ke posisi */
    .logo-anim {
        animation: logoIntro 2s ease forwards;
    }

    @keyframes logoIntro {
        0% {
            transform: scale(8) translate(0, 0);
            top: 50%;
            left: 50%;
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
        100% {
            transform: scale(1) translate(0, 0);
            top: 0;
            left: 0;
            opacity: 1;
        }
    }

    /* Form spawn bareng logo */
    .form-hidden {
        opacity: 0;
        transform: translateY(30px);
    }

    .form-show {
        opacity: 1;
        transform: translateY(0);
        transition: all 1s ease;
    }

    /* Title */
    .main-title {
        color: white;
        font-size: 32px;
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 15px;
        letter-spacing: -1px;
    }

    .subtitle {
        color: rgba(255, 255, 255, 0.9);
        font-size: 16px;
        font-weight: 400;
        line-height: 1.4;
    }

    /* Right Section - White */
    .white-section {
        background: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 30px;
    }

    .login-form-wrapper {
        width: 100%;
        max-width: 300px;
    }

    /* Form Header */
    .form-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .signin-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
        letter-spacing: -0.5px;
        color: #2c3e50;
    }

    .signin-subtitle {
        font-size: 14px;
        font-weight: 400;
        margin: 0;
        color: #888;
    }

    .input-group-custom {
        position: relative;
        margin-bottom: 20px;
    }

    .form-control-custom {
        width: 100%;
        height: 45px;
        border: 2px solid #E0E0E0;
        border-radius: 22px;
        padding: 0 20px;
        font-size: 14px;
        font-weight: 500;
        background: #fdfdfd;
        transition: all 0.3s ease;
        outline: none;
        color: #333;
    }

    .form-control-custom::placeholder {
        color: #999;
        font-weight: 400;
    }

    .form-control-custom:focus {
        border-color: #2c3e50;
        box-shadow: 0 0 0 3px rgba(44, 62, 80, 0.1);
    }
    
    #togglePassword {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #999;
    }

    #togglePassword:hover {
        color: #333;
    }

    .btn-login {
        width: 100%;
        height: 45px;
        background: linear-gradient(135deg, #2c3e50 0%, #2c3e50 100%);
        border: none;
        border-radius: 22px;
        color: white;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(44, 62, 80, 0.3);
        margin-top: 10px;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(44, 62, 80, 0.4);
    }

    .btn-login:active {
        transform: translateY(0);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .login-card { margin: 10px; max-width: 90%; min-height: 400px; }
        .blue-section { padding: 30px 20px; }
        .white-section { padding: 30px 20px; }
        .main-title { font-size: 24px; }
        .subtitle { font-size: 14px; }
        .signin-title { font-size: 20px; }
        .logo-text span { font-size: 10px; }
    }
    @media (max-width: 480px) {
        .login-card { margin: 5px; max-width: 95%; min-height: 350px; }
        .main-title { font-size: 20px; }
        .blue-section, .white-section { padding: 20px 15px; }
    }
</style>
@endsection
