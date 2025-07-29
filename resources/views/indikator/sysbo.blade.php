@extends('layouts.app')

@section('title', 'System Budaya Organisasi (SysBO)')

@section('content')
<div class="container py-5 justify">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-cogs me-2"></i>System Budaya Organisasi (SysBO)</h2>
        <p class="text-muted fs-5">Indikator Sistem Pendukung Budaya BerAKHLAK</p>
        <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="mb-4 fade-up nilai">
        <p class="fs-5">Indikator <strong>System Budaya Organisasi (SysBO)</strong> mengukur sejauh mana sistem dan struktur organisasi BPS Kabupaten Tasikmalaya mendukung implementasi nilai-nilai <strong>BerAKHLAK</strong> dalam budaya kerja sehari-hari. Berikut indikator yang digunakan:</p>
    </div>

    @php
        $sysbo = [
            'BPS Kabupaten Tasikmalaya memberikan sanksi terhadap pegawai yang melakukan tindakan yang tidak sesuai dengan nilai BerAKHLAK.',
            'BPS Kabupaten Tasikmalaya memiliki standar yang jelas dalam mengimplementasikan nilai-nilai BerAKHLAK.',
            'BPS memberikan penghargaan kepada pegawai yang menunjukkan implementasi nilai BerAKHLAK dengan sangat baik.',
            'Sudah tersedia media pengaduan seperti email, telepon, SMS, WhatsApp, dan lainnya untuk menampung keluhan stakeholder (eksternal dan internal).',
            'Tersedia sarana bagi pegawai untuk secara aktif menyuarakan pendapat dalam meningkatkan nilai BerAKHLAK menjadi budaya organisasi.',
            'Telah ada inisiatif atau program untuk mendorong penguatan nilai BerAKHLAK dalam organisasi.',
            'BPS telah mengimplementasikan program peningkatan BerAKHLAK dalam pekerjaan sehari-hari.',
            'Pegawai dengan pelayanan luar biasa mendapat prioritas untuk peningkatan kompetensi.',
            'Ada media komunikasi rutin untuk sosialisasi BerAKHLAK dan budaya pelayanan seperti komunitas internal, Varia Statistik, email, atau grup WhatsApp.',
            'Inisiatif peningkatan BerAKHLAK dilakukan dengan memperhatikan masukan dari stakeholder internal dan eksternal.',
            'Penghargaan budaya BerAKHLAK diberikan secara adil dan transparan, khususnya dalam peningkatan kualitas pelayanan.'
        ];

        $colors = ['primary', 'success', 'warning', 'info', 'danger', 'secondary', 'dark'];
    @endphp

    <div class="row g-4">
        @foreach ($sysbo as $i => $item)
        @php
            $color = $colors[$i % count($colors)];
        @endphp
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-{{ $color }}">
                <div class="card-body d-flex align-items-start">
                    <h5 class="fw-bold text-{{ $color }} me-2 mb-0 mt-1">{{ $i + 1 }}.</h5>
                <p class="mb-0">{{ $item }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
@endpush
