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
                                <img src="{{ asset('foto/Logo_BPS.png') }}" alt="Logo BPS" class="logo-img">
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
                <div class="login-form-wrapper">
                    <div class="form-header">
                        <h2 class="signin-title">SIGN IN</h2>
                        <p class="signin-subtitle">TO ACCESS APPLICATION</p>
                    </div>

                    <!-- Login Form -->
                    <form class="login-form">
                        <!-- Username -->
                        <div class="input-group-custom">
                            <input type="text" class="form-control-custom" 
                                   id="username" placeholder="Username" required>
                        </div>

                        <div class="input-group-custom" style="position: relative;">
                            <input type="password" class="form-control-custom" id="password" placeholder="Password" required>

                            <i class="fa-solid fa-eye" id="togglePassword"
                            style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%);
                                    cursor: pointer; color: #000;"></i>
                        </div>
                        

                        <!-- Login Button -->
                        <button type="button" class="btn-login">
                            Log In
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
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
    }

    .logo-img {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }

    .logo-text span {
        color: white;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        line-height: 1.2;
    }

    /* Main Title */
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

    /* DIMODIFIKASI: Mengatur warna header form menjadi gelap agar terlihat */
    .signin-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
        letter-spacing: -0.5px;
        color: #2c3e50; /* Warna gelap */
    }

    .signin-subtitle {
        font-size: 14px;
        font-weight: 400;
        margin: 0;
        color: #888; /* Warna abu-abu */
    }

    /* DIHAPUS: Aturan ini yang menyebabkan semua teks jadi putih */
    /*
    .white-section * {
        color: white !important;
    }
    .signin-title,
    .signin-subtitle {
        color: white !important;
    }
    */

    /* Form Inputs */
    .input-group-custom {
        position: relative;
        margin-bottom: 20px;
    }

    /* DIMODIFIKASI: Mengatur warna input agar normal */
    .form-control-custom {
        width: 100%;
        height: 45px;
        border: 2px solid #E0E0E0;
        border-radius: 22px;
        padding: 0 20px;
        font-size: 14px;
        font-weight: 500; /* Sedikit lebih tebal agar mudah dibaca */
        background: #fdfdfd; /* Background sedikit off-white */
        transition: all 0.3s ease;
        outline: none;
        color: #333; /* Warna teks input menjadi gelap */
    }

    .form-control-custom::placeholder {
        color: #999;
        font-weight: 400;
    }

    .form-control-custom:focus {
        border-color: #2c3e50;
        box-shadow: 0 0 0 3px rgba(44, 62, 80, 0.1);
    }
    
    /* DIMODIFIKASI: Memindahkan style icon dari inline ke CSS */
    #togglePassword {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #999; /* Warna icon abu-abu */
    }

    #togglePassword:hover {
        color: #333; /* Warna icon lebih gelap saat di-hover */
    }


    /* DIHAPUS: Blok "FIX" yang lama tidak diperlukan lagi */
    /*
    .white-section input.form-control-custom { ... }
    .white-section input::placeholder { ... }
    #togglePassword { ... }
    */

    /* Login Button */
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

    /* Responsive Design (Tidak diubah) */
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

    /* Animations (Tidak diubah) */
    .login-card { animation: fadeInUp 0.8s ease-out; }
    .content-left { animation: slideInLeft 0.8s ease-out 0.2s both; }
    .login-form-wrapper { animation: slideInRight 0.8s ease-out 0.2s both; }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes slideInLeft { from { opacity: 0; transform: translateX(-30px); } to { opacity: 1; transform: translateX(0); } }
    @keyframes slideInRight { from { opacity: 0; transform: translateX(30px); } to { opacity: 1; transform: translateX(0); } }

.form-control-custom {
    width: 100%;
    height: 45px;
    border-radius: 22px;
    padding: 0 20px;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    outline: none;

    /* STRATEGI BARU: Memaksa warna dengan !important */
    background-color: #fdfdfd !important;
    color: #333 !important;
    border: 2px solid #E0E0E0 !important;

    /* Nonaktifkan gaya asli dari browser (tambahan) */
    -webkit-appearance: none;
    appearance: none;
}
</style>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');
        const loginBtn = document.querySelector('.btn-login');

        // Input focus effects
        [usernameInput, passwordInput].forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'scale(1.02)';
                this.style.borderColor = '#2196F3';
            });
            
            input.addEventListener('blur', function() {
                this.style.transform = 'scale(1)';
                if (!this.value) {
                    this.style.borderColor = '#E0E0E0';
                }
            });
        });

        // Login button functionality
        loginBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Reset styles
            usernameInput.style.borderColor = '#E0E0E0';
            passwordInput.style.borderColor = '#E0E0E0';
            
            // Validation
            if (!usernameInput.value.trim()) {
                usernameInput.style.borderColor = '#f44336';
                usernameInput.focus();
                return;
            }
            
            if (!passwordInput.value.trim()) {
                passwordInput.style.borderColor = '#f44336';
                passwordInput.focus();
                return;
            }
            
            // Loading state
            const originalText = this.innerHTML;
            this.innerHTML = '<span style="display: inline-flex; align-items: center; gap: 8px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="animation: spin 1s linear infinite;"><circle cx="12" cy="12" r="10"></circle><path d="M16 12l-4-4-4 4"></path></svg>Signing In...</span>';
            this.disabled = true;
            
            // Simulate login
            setTimeout(() => {
                this.innerHTML = originalText;
                this.disabled = false;
                alert('Login berhasil! (Demo)');
            }, 2000);
        });

        // Enter key support
        [usernameInput, passwordInput].forEach(input => {
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    loginBtn.click();
                }
            });
        });
    });
</script>

<style>
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>
@endpush
