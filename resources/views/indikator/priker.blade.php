@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="mb-5 text-center">
        <h2 class="fw-bold text-primary">Perilaku Kerja Pegawai (PriKer)</h2>
        <p class="text-muted fs-5">Indikator Penilaian Budaya BerAKHLAK</p>
        <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="mb-4 fade-up">
        <p class="fs-5">Indikator <strong>Perilaku Kerja Pegawai (PriKer)</strong> mengacu pada nilai-nilai inti <strong>BerAKHLAK</strong> dan dijadikan sebagai acuan dalam penilaian budaya kerja di lingkungan BPS. Berikut adalah indikatornya:</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <h5 class="fw-bold text-primary">Berorientasi Pelayanan</h5>
                    <p>Memahami dan memenuhi kebutuhan masyarakat, ramah, cekatan, solutif, dapat diandalkan, dan melakukan perbaikan tiada henti.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <h5 class="fw-bold text-success">Akuntabel</h5>
                    <p>Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin, berintegritas tinggi; menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, efisien; dan tidak menyalahgunakan kewenangan jabatan.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-warning">
                <div class="card-body">
                    <h5 class="fw-bold text-warning">Kompeten</h5>
                    <p>Meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah, membantu orang lain belajar, dan melaksanakan tugas dengan kualitas terbaik.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-info">
                <div class="card-body">
                    <h5 class="fw-bold text-info">Harmonis</h5>
                    <p>Menghargai setiap orang apapun latar belakangnya, suka menolong orang lain, dan membangun lingkungan kerja yang kondusif.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-danger">
                <div class="card-body">
                    <h5 class="fw-bold text-danger">Loyal</h5>
                    <p>Memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI dan pemerintahan yang sah, menjaga nama baik ASN, pimpinan, instansi, dan negara; serta menjaga rahasia jabatan dan negara.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-secondary">
                <div class="card-body">
                    <h5 class="fw-bold text-secondary">Adaptif</h5>
                    <p>Cepat menyesuaikan diri menghadapi perubahan, terus berinovasi dan mengembangkan kreativitas, serta bertindak proaktif.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 offset-md-3 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-dark">
                <div class="card-body">
                    <h5 class="fw-bold text-dark">Kolaboratif</h5>
                    <p>Memberi kesempatan kepada berbagai pihak untuk berkontribusi, terbuka dalam bekerja sama untuk menghasilkan nilai tambah, dan menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .fade-up {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-in-out;
    }

    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
</style>
@endpush

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
