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

<!-- Filter Tahun Triwulan -->
<div class="container mb-4 text-end">
    <label for="filterTahun" class="form-label fw-semibold me-2">Filter Tahun:</label>
    <select id="filterTahun" class="form-select d-inline-block w-auto">
        <option value="all">Semua</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
    </select>
</div>

<!-- Daftar Pegawai Tiap Triwulan -->
@php
    $pegawai2024 = [
        1 => [
            'nama' => 'Iis Irmawati, A.Md.',
            'status' => 'Terpilih',
            'keterangan' => 'Pemenang Triwulan I 2024',
            'badge' => 'success',
            'foto' => 'tw_Iis.jpeg'
        ],
        2 => [
            'nama' => 'Ika Nuryani, SST, M.Stat.',
            'status' => 'Terpilih',
            'keterangan' => 'Pemenang Triwulan II 2024',
            'badge' => 'info',
            'foto' => 'tw_ika.jpg'
        ],
        3 => [
            'nama' => 'Dudi Suryadi, S.E, M.P., M.Sc.',
            'status' => 'Terpilih',
            'keterangan' => 'Pemenang Triwulan III 2024',
            'badge' => 'warning',
            'foto' => 'tw_dudi.jpg'
        ],
        4 => [
            'nama' => 'Priangga Andrew Wirawan, S.ST.',
            'status' => 'Terpilih',
            'keterangan' => 'Pemenang Triwulan VI 2024',
            'badge' => 'danger',
            'foto' => 'tw_wira.jpg'
        ]
    ];

    $pegawai2025 = [
        1 => [
            'nama' => 'Belum Ditemukan',
            'status' => 'Coming Soon',
            'keterangan' => 'Menunggu Penilaian',
            'badge' => 'secondary',
            'foto' => 'tandatanya.jpg'
        ],
        2 => [
            'nama' => 'Belum Ditentukan',
            'status' => 'Coming Soon',
            'keterangan' => 'Menunggu Penilaian',
            'badge' => 'secondary',
            'foto' => 'tandatanya.jpg'
        ],
        3 => [
            'nama' => 'Belum Ditentukan',
            'status' => 'Coming Soon',
            'keterangan' => 'Menunggu Penilaian',
            'badge' => 'secondary',
            'foto' => 'tandatanya.jpg'
        ],
        4 => [
            'nama' => 'Belum Ditentukan',
            'status' => 'Coming Soon',
            'keterangan' => 'Menunggu Penilaian',
            'badge' => 'secondary',
            'foto' => 'tandatanya.jpg'
        ]
    ];
@endphp

<!-- Daftar Pegawai Triwulan 2024 -->
<div class="container mb-5">
    <div class="row g-4 tahun-section" data-tahun="2024">
        @foreach ($pegawai2024 as $tw => $data)
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm rounded-4 text-center fade-up hover-grow border-0">
                <div class="card-body d-flex flex-column align-items-center p-4">

                    {{-- Foto --}}
                    <div class="mb-3 w-100">
                        <img src="{{ asset('foto/' . $data['foto']) }}" 
                             alt="Foto {{ $data['nama'] }}" 
                             class="img-fluid rounded shadow-sm" 
                             style="width: 100%; height: auto;">
                    </div>

                    {{-- Nama --}}
                    <h6 class="fw-bold text-{{ $data['badge'] }} mt-2">{{ $data['nama'] }}</h6>

                    {{-- Keterangan --}}
                    <p class="text-muted small">{{ $data['keterangan'] }}</p>

                    {{-- Status --}}
                    <span class="badge bg-{{ $data['badge'] }} px-3 py-2 mt-auto">{{ $data['status'] }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4 tahun-section" data-tahun="2025">
        @foreach ($pegawai2025 as $tw => $data)
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm rounded-4 text-center fade-up hover-grow border-0">
                <div class="card-body d-flex flex-column align-items-center p-4">

                    {{-- Foto --}}
                    <div class="mb-3 w-100">
                        <img src="{{ asset('foto/' . $data['foto']) }}" 
                             alt="Foto {{ $data['nama'] }}" 
                             class="img-fluid rounded shadow-sm" 
                             style="width: 100%; height: auto;">
                    </div>

                    {{-- Nama --}}
                    <h6 class="fw-bold text-{{ $data['badge'] }} mt-2">{{ $data['nama'] }}</h6>

                    {{-- Keterangan --}}
                    <p class="text-muted small">{{ $data['keterangan'] }}</p>

                    {{-- Status --}}
                    <span class="badge bg-{{ $data['badge'] }} px-3 py-2 mt-auto">{{ $data['status'] }}</span>
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
                    <h4 class="fw-bold text-primary" id="pegawai-count">46</h4>
                    <p class="text-muted">Total Pegawai</p>
                </div>
                <div class="col-md-4 mb-3 fade-up">
                    <i class="fas fa-award fa-2x text-success mb-2"></i>
                    <h4 class="fw-bold text-success" id="tw-count">4</h4>
                    <p class="text-muted">Triwulan Penilaian Pertahun</p>
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

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<style>
/* Banner sticky di bawah navbar */
.info-banner {
    position: sticky;
    top: 56px;
    z-index: 1020;
    background-color: #0d6efd;
}
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>
<script>
    // CountUp animation
    document.addEventListener("DOMContentLoaded", function () {
        const pegawai = new CountUp('pegawai-count', 50);
        const tw = new CountUp('tw-count', 8);
        const trans = new CountUp('trans-count', 100, {suffix: '%'});
        pegawai.start();
        tw.start();
        trans.start();
    });

    // Scroll fade up animation
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    // Tahun Filter Logic
    document.getElementById('filterTahun').addEventListener('change', function() {
        const selected = this.value;
        document.querySelectorAll('.tahun-section').forEach(section => {
            const tahun = section.getAttribute('data-tahun');
            section.style.display = (selected === 'all' || selected === tahun) ? 'flex' : 'none';
        });
    });
</script>
@endpush