@extends('layouts.app')

@section('title', 'People Budaya Organisasi')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-users me-2"></i>People Budaya Organisasi (PeBO)</h2>
        <p class="text-muted">Indikator Perilaku Pegawai BerAKHLAK</p>
    </div>

    <div class="row g-4">
        <div class="col-12 fade-up">
            <p>
                Indikator <strong>People Budaya Organisasi (PeBO)</strong> digunakan untuk menilai internalisasi nilai BerAKHLAK dalam perilaku setiap individu ASN di BPS. Penilaian ini mencerminkan kualitas sumber daya manusia sebagai pilar penting budaya kerja.
            </p>

            <ol class="list-unstyled counter-list mt-4">
                <li>Pegawai memahami dan memenuhi kebutuhan masyarakat</li>
                <li>Pegawai ramah, cekatan, solutif, dan dapat diandalkan</li>
                <li>Pegawai melakukan perbaikan tiada henti</li>
                <li>Pegawai melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin, dan berintegritas tinggi</li>
                <li>Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien</li>
                <li>Pegawai tidak menyalahgunakan kewenangan jabatan</li>
                <li>Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah</li>
                <li>Pegawai membantu orang lain belajar</li>
                <li>Pegawai melaksanakan tugas dengan kualitas terbaik</li>
                <li>Pegawai menghargai setiap orang apapun latar belakangnya</li>
                <li>Pegawai suka menolong orang lain</li>
                <li>Pegawai membangun lingkungan kerja yang kondusif</li>
                <li>Pegawai memegang teguh ideologi Pancasila, UUD 1945, dan setia kepada NKRI serta pemerintahan yang sah</li>
                <li>Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara</li>
                <li>Pegawai menjaga rahasia jabatan dan negara</li>
                <li>Pegawai cepat menyesuaikan diri menghadapi perubahan</li>
                <li>Pegawai terus berinovasi dan mengembangkan kreativitas</li>
                <li>Pegawai bertindak proaktif</li>
                <li>Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi</li>
                <li>Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah</li>
                <li>Pegawai menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama</li>
            </ol>
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
    .counter-list {
        counter-reset: section;
    }
    .counter-list li {
        position: relative;
        padding-left: 2.5rem;
        margin-bottom: 1rem;
    }
    .counter-list li::before {
        counter-increment: section;
        content: counter(section);
        position: absolute;
        left: 0;
        top: 0;
        width: 2rem;
        height: 2rem;
        background-color: #0d6efd;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
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