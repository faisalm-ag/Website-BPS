<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Penilaian BPS Kab. Tasikmalaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    @stack('styles')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-bps-blue shadow fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('/foto/logobps.png') }}" alt="Logo BPS" width="160px" class="me-2">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Konsep Definisi</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('konsep.dasar') }}">Dasar Hukum</a></li>
                            <li><a class="dropdown-item" href="{{ route('konsep.nilai') }}">Nilai-Nilai Inti BPS</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('konsep.model') }}">Model Implementasi</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Indikator Penilaian</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('indikator.priker') }}">Perilaku Kerja
                                    Pegawai</a></li>
                            <li><a class="dropdown-item" href="{{ route('indikator.leadbo') }}">Leadership Budaya
                                    Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('indikator.pebo') }}">People Budaya
                                    Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('indikator.sysbo') }}">System Budaya
                                    Organisasi</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Form Penilaian</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('form.budaya') }}">Budaya Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('form.teladan') }}">Pegawai Teladan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hasil Penilaian</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('hasil.budaya') }}">Budaya Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('hasil.teladan') }}">Pegawai Teladan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Galeri</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('galeri.foto') }}">Foto</a></li>
                            <li><a class="dropdown-item" href="{{ route('galeri.piagam') }}">Piagam Penghargaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('galeri.manual') }}">Manual Book</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login.login') }}">Angga Parlindungan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Info Banner -->
    <div class="info-banner text-white shadow-sm">
        <div class="container-fluid">
            <div class="row align-items-center py-2">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-info-circle me-2"></i>
                        <span class="fw-medium">
                            Pengumuman Pemenang Pegawai Teladan telah diumumkan!
                            <strong>Klik untuk melihat detail →</strong>
                        </span>
                    </div>
                </div>
                <div class="col-auto">
                    <button class="btn btn-link text-white p-0 border-0" id="bannerToggle">
                        <i class="fas fa-chevron-down" id="bannerIcon"></i>
                    </button>
                    <button class="btn btn-link text-white p-0 border-0 ms-2" id="bannerClose">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Collapsible Winner Section -->
    <div class="collapse" id="winnerBanner">
        <div class="bg-gradient-primary text-white py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center">
                            <div class="trophy-icon me-3">
                                <i class="fas fa-trophy fa-2x text-warning"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Selamat Kepada Pemenang!</h5>
                                <h4 class="fw-bold mb-1">Bapak Muhamad Sobari, S.ST., M.Stat.</h4>
                                <p class="mb-0 opacity-75">Pegawai Teladan Triwulan I Tahun 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <div class="d-flex align-items-center justify-content-md-end">
                            <div class="me-3">
                                <small class="opacity-75">Diumumkan pada:</small>
                                <div class="fw-bold">15 Januari 2025</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Halaman -->
    <div class="container py-4 main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Badan Pusat Statistik Kab. Tasikmalaya</h3>
                <a href="https://g.co/kgs/r1q7nS7">Alamat: M43R+V63, Jl. Garut - Tasikmalaya, Cintaraja, Kec. Singaparna, Kabupaten Tasikmalaya, Jawa Barat 46417, Indonesia</a>
            </div>
            <div class="footer-section">
                <h3>Pusat Bantuan</h3>
                <a>Kontak Kami "(0265) 549281"</a>
                <a>FAQ "(0265) 549253"</a>
            </div>
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <a href="https://ppid.bps.go.id/app/konten/3206/Profil-BPS.html?_gl=1*1yh0adi*_ga*MjA5MTAzMjMzOC4xNzUxNDQxODAz*_ga_XXTTVXWHDB*czE3NTIxMTg0MjgkbzQkZzEkdDE3NTIxMTkwMTIkajQ0JGwwJGgw">Profil BPS</a>
                <a href="https://ppid.bps.go.id/?mfd=3206&_gl=1*1yh0adi*_ga*MjA5MTAzMjMzOC4xNzUxNDQxODAz*_ga_XXTTVXWHDB*czE3NTIxMTg0MjgkbzQkZzEkdDE3NTIxMTkwMTIkajQ0JGwwJGgw">PPID</a>
                <a href="https://ppid.bps.go.id/app/konten/0000/Layanan-BPS.html?_gl=1*kty56z*_ga*MjA5MTAzMjMzOC4xNzUxNDQxODAz*_ga_XXTTVXWHDB*czE3NTIxMTg0MjgkbzQkZzEkdDE3NTIxMTkwMTIkajQ0JGwwJGgw#pills-3">Kebijakan Dimensi</a>
            </div>
            <div class="footer-section">
                <h3>Ikuti Kami</h3>
                <a href="https://www.facebook.com/people/BPS-Kabupaten-Tasikmalaya/100088421893990/?mibextid=ZbWKwL"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="https://www.instagram.com/bps.kab.tasikmalaya/"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="https://x.com/bpstasik/"><i class="fab fa-x"></i> X</a>
                <a href="https://www.youtube.com/@bpskabtasikmalaya3206"><i class="fab fa-youtube"></i> Youtube</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy;2025 Badan Pusat Statistik Kabupaten Tasikmalaya</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome (ikon) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Script Toggle Banner -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const bannerToggle = document.getElementById('bannerToggle');
            const bannerIcon = document.getElementById('bannerIcon');
            const bannerClose = document.getElementById('bannerClose');
            const winnerBanner = document.getElementById('winnerBanner');
            const infoBanner = document.querySelector('.info-banner');

            if (bannerToggle && winnerBanner && bannerIcon && bannerClose && infoBanner) {
                bannerToggle.addEventListener('click', function () {
                    const isCollapsed = !winnerBanner.classList.contains('show');

                    if (isCollapsed) {
                        winnerBanner.classList.add('show');
                        bannerIcon.classList.add('rotated');
                        bannerIcon.classList.remove('fa-chevron-down');
                        bannerIcon.classList.add('fa-chevron-up');
                    } else {
                        winnerBanner.classList.remove('show');
                        bannerIcon.classList.remove('rotated');
                        bannerIcon.classList.remove('fa-chevron-up');
                        bannerIcon.classList.add('fa-chevron-down');
                    }
                });

                infoBanner.addEventListener('click', function (e) {
                    if (e.target.closest('#bannerClose')) return;
                    bannerToggle.click();
                });

                bannerClose.addEventListener('click', function (e) {
                    e.stopPropagation();
                    infoBanner.style.display = 'none';
                    winnerBanner.classList.remove('show');
                });

                setTimeout(() => {
                    if (!winnerBanner.classList.contains('show')) {
                        infoBanner.style.opacity = '0.8';
                    }
                }, 5000);
            }
        });
    </script>

    @stack('scripts')
</body>

</html>