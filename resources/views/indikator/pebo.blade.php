@extends('layouts.app')

@section('title', 'People Budaya Organisasi')

@section('content')
<div class="container py-5 justify">
    <div class="mb-5 text-center">
        <h2 class="fw-bold text-primary"><i class="fas fa-users me-2"></i>People Budaya Organisasi (PeBO)</h2>
        <p class="text-muted fs-5">Indikator Perilaku ASN BPS BerAKHLAK</p>
        <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="mb-4 fade-up nilai">
        <p class="fs-5">
            Indikator <strong>People Budaya Organisasi (PeBO)</strong> digunakan untuk menilai internalisasi nilai-nilai <strong>BerAKHLAK</strong> dalam perilaku individu ASN. Penilaian ini mencerminkan kualitas SDM sebagai pilar budaya kerja di lingkungan BPS.
        </p>
    </div>

    @php
        $pebo = [
            'Pegawai memahami dan memenuhi kebutuhan masyarakat',
            'Pegawai ramah, cekatan, solutif, dan dapat diandalkan',
            'Pegawai melakukan perbaikan tiada henti',
            'Pegawai melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin, dan berintegritas tinggi',
            'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien',
            'Pegawai tidak menyalahgunakan kewenangan jabatan',
            'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah',
            'Pegawai membantu orang lain belajar',
            'Pegawai melaksanakan tugas dengan kualitas terbaik',
            'Pegawai menghargai setiap orang apapun latar belakangnya',
            'Pegawai suka menolong orang lain',
            'Pegawai membangun lingkungan kerja yang kondusif',
            'Pegawai memegang teguh ideologi Pancasila, UUD 1945, dan setia kepada NKRI serta pemerintahan yang sah',
            'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara',
            'Pegawai menjaga rahasia jabatan dan negara',
            'Pegawai cepat menyesuaikan diri menghadapi perubahan',
            'Pegawai terus berinovasi dan mengembangkan kreativitas',
            'Pegawai bertindak proaktif',
            'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi',
            'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah',
            'Pegawai menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama',
        ];

        $colors = ['primary', 'success', 'warning', 'info', 'danger', 'secondary', 'dark'];
    @endphp

    <div class="row g-4">
        @foreach ($pebo as $i => $item)
        @php $color = $colors[$i % count($colors)]; @endphp
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
