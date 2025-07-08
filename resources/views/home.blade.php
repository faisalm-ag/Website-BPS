@extends('layouts.app')

@section('content')

<!-- Header -->
<div class="header-bg d-flex align-items-center justify-content-center text-white text-center mb-5">
    <div class="overlay"></div>
    <div class="position-relative z-1">
        <h1 class="fw-bold display-4">Selamat Datang</h1>
        <p class="lead fs-3">Sistem Penilaian Budaya Organisasi & Pegawai Teladan</p>
        <p class="fs-4">BPS Kabupaten Tasikmalaya</p>
    </div>
</div>

<!-- Daftar Pegawai Tiap Triwulan -->
<div class="container mb-5">
    <div class="row g-4">
        @foreach ([1, 2, 3, 4] as $i)
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow text-center fade-up hover-grow">
                <div class="card-header bg-{{ $i == 1 ? 'success' : ($i == 2 ? 'info' : ($i == 3 ? 'warning' : 'danger')) }} text-white">
                    <h5 class="fw-bold mb-0">Triwulan {{ $i }} - 2025</h5>
                </div>
                <div class="card-body d-flex flex-column">
                    <i class="fas fa-user-circle fa-4x text-muted mb-3"></i>
                    @if ($i == 1)
                        <h6 class="fw-bold text-success">Muhamad Sobari, S.ST., M.Stat.</h6>
                        <p class="text-muted small">Pemenang Terbaru</p>
                        <span class="badge bg-success mt-auto">Terpilih</span>
                    @else
                        <h6 class="text-muted">Belum Ditentukan</h6>
                        <p class="text-muted small">Menunggu Penilaian</p>
                        <span class="badge bg-secondary mt-auto">Coming Soon</span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Statistik Section -->
<div class="container mb-5">
    <div class="card bg-light shadow-sm">
        <div class="card-body py-5 text-center">
            <h3 class="fw-bold text-primary mb-4">Statistik Penilaian</h3>
            <div class="row">
                <div class="col-md-4 mb-3 fade-up">
                    <i class="fas fa-users fa-2x text-primary mb-2"></i>
                    <h4 class="fw-bold text-primary" id="pegawai-count">0</h4>
                    <p class="text-muted">Total Pegawai</p>
                </div>
                <div class="col-md-4 mb-3 fade-up">
                    <i class="fas fa-award fa-2x text-success mb-2"></i>
                    <h4 class="fw-bold text-success" id="tw-count">0</h4>
                    <p class="text-muted">Triwulan Penilaian</p>
                </div>
                <div class="col-md-4 mb-3 fade-up">
                    <i class="fas fa-chart-line fa-2x text-warning mb-2"></i>
                    <h4 class="fw-bold text-warning" id="trans-count">0%</h4>
                    <p class="text-muted">Transparansi</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Google Maps Lokasi -->
<div class="container mb-5">
    <h4 class="text-center fw-bold text-primary mb-4">Lokasi Kantor BPS Kab. Tasikmalaya</h4>
    <div class="ratio ratio-16x9 shadow rounded">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15853.02632042565!2d108.134168!3d-7.347883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e659262d3c09a17%3A0xd64eaf5d1a49a60a!2sBPS%20Kabupaten%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1720173182812!5m2!1sid!2sid"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const pegawai = new CountUp('pegawai-count', 50);
        const tw = new CountUp('tw-count', 8);
        const trans = new CountUp('trans-count', 100, { suffix: '%' });
        pegawai.start();
        tw.start();
        trans.start();

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
    });
</script>
@endpush
