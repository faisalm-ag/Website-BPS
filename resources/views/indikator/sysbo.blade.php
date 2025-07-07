@extends('layouts.app')

@section('title', 'System Budaya Organisasi')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-cogs me-2"></i>System Budaya Organisasi (SysBO)</h2>
        <p class="text-muted">Indikator Sistem Pendukung Budaya BerAKHLAK</p>
    </div>

    <div class="row g-4">
        <div class="col-12 fade-up">
            <p>Indikator <strong>System Budaya Organisasi (SysBO)</strong> mengukur sejauh mana sistem dan struktur organisasi BPS Kabupaten Tasikmalaya mendukung implementasi nilai-nilai BerAKHLAK dalam budaya kerja sehari-hari. Berikut indikator yang digunakan:</p>

            <ul class="mt-4 list-unstyled">
                @php $sysbo = [
                    'BPS Kabupaten Tasikmalaya memberikan <strong>sanksi terhadap pegawai</strong> yang melakukan tindakan yang tidak sesuai dengan nilai BerAKHLAK.',
                    'BPS Kabupaten Tasikmalaya memiliki <strong>standar yang jelas</strong> dalam mengimplementasikan nilai-nilai BerAKHLAK.',
                    'BPS memberikan <strong>penghargaan</strong> kepada pegawai yang menunjukkan implementasi nilai BerAKHLAK dengan sangat baik.',
                    'Sudah tersedia <strong>media pengaduan</strong> seperti email, telepon, SMS, WhatsApp, dan lainnya untuk menampung keluhan stakeholder (eksternal dan internal).',
                    'Tersedia <strong>sarana bagi pegawai</strong> untuk secara aktif menyuarakan pendapat dalam meningkatkan nilai BerAKHLAK menjadi budaya organisasi.',
                    'Telah ada <strong>inisiatif atau program</strong> untuk mendorong penguatan nilai BerAKHLAK dalam organisasi.',
                    'BPS telah <strong>mengimplementasikan program</strong> peningkatan BerAKHLAK dalam pekerjaan sehari-hari.',
                    '<strong>Pegawai dengan pelayanan luar biasa</strong> mendapat prioritas untuk peningkatan kompetensi.',
                    'Ada <strong>media komunikasi rutin</strong> untuk sosialisasi BerAKHLAK dan budaya pelayanan seperti komunitas internal, Varia Statistik, email, atau grup WhatsApp.',
                    '<strong>Inisiatif peningkatan BerAKHLAK</strong> dilakukan dengan memperhatikan masukan dari stakeholder internal dan eksternal.',
                    '<strong>Penghargaan budaya BerAKHLAK</strong> diberikan secara adil dan transparan, khususnya dalam peningkatan kualitas pelayanan.'
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

@push('styles')
<style>
    .fade-up {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-in-out;
    }
    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush

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
