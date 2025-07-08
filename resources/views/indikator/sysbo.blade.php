@extends('layouts.app')

@section('title', 'System Budaya Organisasi')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-cogs me-2"></i>System Budaya Organisasi (SysBO)</h2>
        <p class="text-muted">Indikator Sistem Pendukung Budaya BerAKHLAK</p>
    </div>

    <div class="row g-4 nilai">
        <div class="col-12 fade-up">
            <p>Indikator <strong>System Budaya Organisasi (SysBO)</strong> mengukur sejauh mana sistem dan struktur organisasi BPS Kabupaten Tasikmalaya mendukung implementasi nilai-nilai BerAKHLAK dalam budaya kerja sehari-hari. Berikut indikator yang digunakan:</p>

            <ul class="mt-4 list-unstyled">
                @php $sysbo = [
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
                ]; @endphp

                @foreach ($sysbo as $i => $item)
                <li class="mb-3 d-flex align-items-start">
                    <div class="me-3">
                        <span class="badge bg-primary rounded-circle px-3 py-2 fs-6">{{ $i + 1 }}</span>
                    </div>
                    <div>{!! $item !!}</div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
@endpush
