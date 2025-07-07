<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penilaian BPS Kab. Tasikmalaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
        }
        #app-content {
            flex: 1 0 auto;
        }

        footer.footer-custom {
            flex-shrink: 0;
            width: 100%;
            background-color: #6c757d;
            color: white;
            text-align: center;
            padding: 1.25rem 0;
        }

        body {
             padding-top: 70px;
        }

        .bg-bps-blue {
            background-color: #6c757d !important;
        }

        .text-bps {
            color: #6c757d !important;
        }

        .navbar-nav .nav-link {
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: underline;
        }

        .dropdown-menu-dark .dropdown-item:hover {
            background-color: #5c636a;
        }

        .btn-primary {
            background-color: #007dc5;
            border-color: #007dc5;
        }

        .btn-primary:hover {
            background-color: #005c9b;
            border-color: #005c9b;
        }
        .footer-custom {
        width: 100%;
        left: 0;
        right: 0;
        bottom: 0;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-light">

{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

{{-- Bootstrap CSS --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }
    .navbar-brand img {
        height: 36px;
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-bps-blue shadow fixed-top">
    <div class="container">
        <!-- Logo BPS -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('/foto/logobps.png') }}" alt="Logo BPS" width="160px" height="auto" class="me-2">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>

                <!-- Konsep Definisi -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Konsep Definisi</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('konsep.dasar') }}">Dasar Hukum</a></li>
                        <li><a class="dropdown-item" href="{{ route('konsep.nilai') }}">Nilai-Nilai Inti BPS</a></li>
                        <li><a class="dropdown-item" href="{{ route('konsep.model') }}">Model Implementasi</a></li>
                    </ul>
                </li>

                <!-- Indikator Penilaian -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Indikator Penilaian</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('indikator.priker') }}">Perilaku Kerja Pegawai</a></li>
                        <li><a class="dropdown-item" href="{{ route('indikator.leadbo') }}">Leadership Budaya Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('indikator.pebo') }}">People Budaya Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('indikator.sysbo') }}">System Budaya Organisasi</a></li>
                    </ul>
                </li>

                <!-- Form Penilaian -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Form Penilaian</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('form.budaya') }}">Budaya Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('form.teladan') }}">Pegawai Teladan</a></li>
                    </ul>
                </li>

                <!-- Hasil Penilaian -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hasil Penilaian</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('hasil.budaya') }}">Budaya Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('hasil.teladan') }}">Pegawai Teladan</a></li>
                    </ul>
                </li>

                <!-- Galeri -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Galeri</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{ route('galeri.foto') }}">Foto</a></li>
                        <li><a class="dropdown-item" href="{{ route('galeri.piagam') }}">Piagam Penghargaan</a></li>
                        <li><a class="dropdown-item" href="{{ route('galeri.manual') }}">Manual Book</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten Halaman -->
<div class="container py-4">
    @yield('content')
</div>

<!-- Footer -->
<footer class="footer-custom">
    <div class="container-fluid px-0">
        <p class="mb-0">&copy; {{ date('Y') }} Badan Pusat Statistik Kabupaten Tasikmalaya</p>
    </div>
</footer>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')
</body>
</html>
