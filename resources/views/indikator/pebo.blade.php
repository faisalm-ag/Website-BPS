@extends('layouts.app')

@section('title', 'People Budaya Organisasi')

@section('content')
<div class="container py-5 justify">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-users me-2"></i>People Budaya Organisasi (PeBO)</h2>
        <p class="text-muted">Indikator Perilaku Pegawai BerAKHLAK</p>
    </div>

    <div class="row g-4 nilai">
        <div class="col-12 fade-up">
            <p>
                Indikator <strong>People Budaya Organisasi (PeBO)</strong> digunakan untuk menilai internalisasi nilai BerAKHLAK dalam perilaku setiap individu ASN di BPS. Penilaian ini mencerminkan kualitas sumber daya manusia sebagai pilar penting budaya kerja.
            </p>

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
            @endphp

            <ul class="mt-4 list-unstyled">
                @foreach ($pebo as $i => $item)
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
