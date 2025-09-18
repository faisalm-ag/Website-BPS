<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    @php
    // safe defaults
    $setting = $setting ?? \App\Models\Setting::first();
    $menus = $menus ?? collect();
    $announcement = $announcement ?? null;
    $winner = $winner ?? null;
    $footerSections = $footerSections ?? collect();
    @endphp
    <title>@yield('title', $setting->site_title ?? 'Penilaian Kinerja Pegawai BPS Kabupaten Tasikmalaya')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @stack('styles')

    <style>
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            .navbar-nav .nav-link {
                color: #f1f1f1 !important;
            }

            .navbar-nav .nav-link:hover {
                color: #ffc107 !important;
            }

            .navbar-nav .nav-link.active {
                color: #ffc107 !important;
            }

            .dropdown-menu {
                background-color: #2c2c2c !important;
                border-color: #444 !important;
            }

            .dropdown-item {
                color: #f1f1f1 !important;
            }

            .dropdown-item:hover,
            .dropdown-item:focus {
                background-color: #444 !important;
                color: #ffffff !important;
            }

            .info-banner,
            .info-banner * {
                color: #f1f1f1 !important;
            }

            #winnerBanner,
            #winnerBanner * {
                color: #f1f1f1 !important;
            }

            .footer-section a {
                color: #bdc3c7 !important;
            }

            .footer-section a:hover {
                color: #ffffff !important;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-bps-blue shadow fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                @if($setting?->logo)
                <img src="{{ Str::startsWith($setting->logo, 'logos/') ? asset('storage/'.$setting->logo) : asset($setting->logo) }}"
                    alt="Logo BPS" width="160px" class="me-2">
                @else
                <img src="{{ asset('/foto/logobps.png') }}" alt="Logo BPS" width="160px" class="me-2">
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- menu statis bawaan --}}
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('konsep/*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Konsep Definisi</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('konsep.dasar') }}">Dasar Hukum</a></li>
                            <li><a class="dropdown-item" href="{{ route('konsep.nilai') }}">Nilai-Nilai Inti BPS</a></li>
                            <li><a class="dropdown-item" href="{{ route('konsep.model') }}">Model Implementasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('indikator/*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Indikator Penilaian</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('indikator.priker') }}">Perilaku Kerja Pegawai</a></li>
                            <li><a class="dropdown-item" href="{{ route('indikator.leadbo') }}">Leadership Budaya Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('indikator.pebo') }}">People Budaya Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('indikator.sysbo') }}">System Budaya Organisasi</a></li>
                        </ul>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('form/*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Form Penilaian</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('form.budaya') }}">Budaya Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('form.teladan') }}">Pegawai Teladan</a></li>
                        </ul>
                    </li>
                    @endauth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('hasil/*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Hasil Penilaian</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('hasil.budaya') }}">Budaya Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ route('hasil.teladan') }}">Pegawai Teladan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('galeri/*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Galeri</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('galeri.foto') }}">Foto</a></li>
                            <li><a class="dropdown-item" href="{{ route('galeri.piagam') }}">Piagam Penghargaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('galeri.manual') }}">Manual Book</a></li>
                        </ul>
                    </li>

                    {{-- Auth / Guest --}}
                    @guest
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}" title="Login">
                            <i class="fas fa-user-circle"></i>
                        </a>
                    </li>
                    @endguest

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }} ({{ Auth::user()->role }})
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            {{-- menu khusus admin --}}
                            @if(Auth::check() && Auth::user()->role === 'admin')
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-users me-2"></i>
                                    <span>Kelola User</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.settings.index') }}">
                                    <i class="fa fa-cog me-2"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.winners.index') }}">
                                    <i class="fa fa-trophy me-2"></i>
                                    <span>Winners</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.footers.index') }}">
                                    <i class="fa fa-bars me-2"></i>
                                    <span>Footer</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.footer-links.index') }}">
                                    <i class="fa fa-link me-2"></i>
                                    <span>Footer Links</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.legal-bases.index') }}">
                                    <i class="fa fa-scale-balanced me-2"></i>
                                    <span>Kelola Dasar Hukum</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.cultural-models.index') }}">
                                    <i class="fa fa-puzzle-piece me-2"></i>
                                    <span>Model Implementasi Budaya</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.core-values.index') }}">
                                    <i class="fa fa-gem me-2"></i>
                                    <span>Nilai-Nilai Inti</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.leadbo.index') }}">
                                    <i class="fa fa-chess-king me-2"></i>
                                    <span>Indikator - Leadership BO</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.pebo.index') }}">
                                    <i class="fa fa-users me-2"></i>
                                    <span>Indikator - People BO</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.priker.index') }}">
                                    <i class="fa fa-user-check me-2"></i>
                                    <span>Indikator - Perilaku Kerja</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.sysbo.index') }}">
                                    <i class="fa fa-cogs me-2"></i>
                                    <span>Indikator - System BO</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.budaya.index') }}">
                                    <i class="fa fa-file-alt me-2"></i> Form - Budaya Organisasi
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.teladan.index') }}">
                                    <i class="fa fa-file-alt me-2"></i> Form - Pegawai Teladan
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.galeri.index') }}">
                                    <i class="fa fa-file-alt me-2"></i> Galeri Foto
                                </a>
                            </li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth

                    {{-- menu tambahan dari DB --}}
                    @foreach($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route($menu->route) }}">
                            {!! $menu->icon ? '<i class="'.$menu->icon.'"></i>' : '' !!} {{ $menu->title }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    <!-- Info Banner -->
    @if($announcement)
    <div class="info-banner">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div><i class="fas fa-info-circle"></i> {!! $announcement->message !!}</div>
            <div>
                <button class="btn btn-link text-white p-0 border-0" id="bannerToggle"><i class="fas fa-chevron-down" id="bannerIcon"></i></button>
                <button class="btn btn-link text-white p-0 border-0" id="bannerClose"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </div>
    @endif

    <!-- Winner Banner -->
    @if($winner)
    <div class="collapse" id="winnerBanner">
        <div class="winner-banner py-4">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="trophy-icon text-warning"><i class="fas fa-trophy fa-2x"></i></div>
                    <div>
                        <h5 class="fw-bold mb-1">Selamat Kepada Pemenang!</h5>
                        <h4 class="fw-bold mb-1">{{ $winner->name }}</h4>
                        <p class="mb-0">{{ $winner->title }}</p>
                    </div>
                </div>
                <div class="text-end mt-3 mt-md-0">
                    <small>Diumumkan pada:</small>
                    <div class="fw-bold">{{ optional($winner->announced_at)->format('d F Y') }}</div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Main Content -->
    <div class="container py-4 main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content container py-4">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @forelse($footerSections as $section)
                <div class="col footer-section">
                    <h3>{{ $section->title }}</h3>
                    @foreach($section->links as $link)
                    <a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a>
                    @endforeach
                </div>
                @empty
                {{-- fallback ke footer statis --}}
                <div class="col footer-section">
                    <h3>BPS Kab. Tasikmalaya</h3>
                    <a href="https://g.co/kgs/r1q7nS7">Jl. Garut - Tasikmalaya, Cintaraja, Singaparna</a>
                    <a href="https://tasikmalayakab.bps.go.id/id">Website BPS Kabupaten Tasikmalaya</a>
                </div>
                <div class="col footer-section">
                    <h3>Pusat Bantuan</h3>
                    <a href="callto:+62265549281">Kontak Kami</a>
                    <a href="callto:+62265549253">FAX</a>
                </div>
                <div class="col footer-section">
                    <h3>Tentang Kami</h3>
                    <a href="https://ppid.bps.go.id/app/konten/3206/Profil-BPS.html">Profil BPS</a>
                    <a href="https://ppid.bps.go.id/?mfd=3206">PPID</a>
                    <a href="https://ppid.bps.go.id/app/konten/0000/Layanan-BPS.html#pills-3">Kebijakan Dimensi</a>
                </div>
                <div class="col footer-section">
                    <h3>Ikuti Kami</h3>
                    <a href="https://www.facebook.com/people/BPS-Kabupaten-Tasikmalaya/100088421893990/"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://www.instagram.com/bps.kab.tasikmalaya/"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="https://x.com/bpstasik/"><i class="fab fa-x"></i> X</a>
                    <a href="https://www.youtube.com/@bpskabtasikmalaya3206"><i class="fab fa-youtube"></i> Youtube</a>
                </div>
                @endforelse
            </div>
        </div>
        <div class="footer-bottom text-center py-3">
            <p>&copy;{{ date('Y') }} {{ $setting->footer_text ?? 'Badan Pusat Statistik Kabupaten Tasikmalaya' }}</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bannerToggle = document.getElementById('bannerToggle');
            const bannerIcon = document.getElementById('bannerIcon');
            const bannerClose = document.getElementById('bannerClose');
            const winnerBanner = document.getElementById('winnerBanner');
            const infoBanner = document.querySelector('.info-banner');

            bannerToggle?.addEventListener('click', () => {
                const expanded = winnerBanner.classList.contains('show');
                winnerBanner.classList.toggle('show');
                bannerIcon.classList.toggle('fa-chevron-down', expanded);
                bannerIcon.classList.toggle('fa-chevron-up', !expanded);
            });

            bannerClose?.addEventListener('click', (e) => {
                e.stopPropagation();
                infoBanner.style.display = 'none';
                winnerBanner.classList.remove('show');
            });

            infoBanner?.addEventListener('click', (e) => {
                if (!e.target.closest('#bannerClose')) bannerToggle.click();
            });
        });
    </script>
    @stack('scripts')
</body>

</html>