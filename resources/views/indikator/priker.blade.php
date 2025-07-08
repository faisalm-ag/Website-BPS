@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="mb-5 text-center">
        <h2 class="fw-bold text-primary">Perilaku Kerja Pegawai (PriKer)</h2>
        <p class="text-muted fs-5">Indikator Penilaian Budaya BerAKHLAK</p>
        <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="mb-4 fade-up nilai">
        <p class="fs-5">Indikator <strong>Perilaku Kerja Pegawai (PriKer)</strong> mengacu pada nilai-nilai inti <strong>BerAKHLAK</strong> dan dijadikan sebagai acuan dalam penilaian budaya kerja di lingkungan BPS. Berikut adalah indikatornya:</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-primary">
                <div class="card-body nilai">
                    <h5 class="fw-bold text-primary">1. Berorientasi Pelayanan</h5>
                    <p>yaitu memahami dan memenuhi kebutuhan masyarakat, ramah, cekatan, solutif, dapat diandalkan, dan melakukan perbaikan tiada henti.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up nilai">
            <div class="card h-100 shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <h5 class="fw-bold text-success">2. Akuntabel</h5>
                    <p>yaitu melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin berintegritas tinggi, menggunakan kekayaan dan barang milik negara secara bertanggungjawab, efektif, efisien, dan tidak menyalahgunakan kewenangan jabatan.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up nilai">
            <div class="card h-100 shadow-sm border-start border-4 border-warning">
                <div class="card-body">
                    <h5 class="fw-bold text-warning">3. Kompeten</h5>
                    <p>yaitu meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah, membantu orang lain belajar, dan melaksanakan tugas dengan kualitas terbaik.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up nilai">
            <div class="card h-100 shadow-sm border-start border-4 border-info">
                <div class="card-body">
                    <h5 class="fw-bold text-info">4. Harmonis</h5>
                    <p>yaitu menghargai setiap orang apapun latar belakangnya, suka menolong orang lain, dan membangun lingkungan kerja yang kondusif.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up nilai">
            <div class="card h-100 shadow-sm border-start border-4 border-danger">
                <div class="card-body">
                    <h5 class="fw-bold text-danger">5. Loyal</h5>
                    <p>yaitu memegang teguh ideologi Pancasila, Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, setia kepada Negara Kesatuan Republik Indonesia serta pemerintahan yang sah, menjaga nama baik sesama ASN, Pimpinan, Instansi, dan Negara, dan menjaga rahasia jabatan dan negara.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up nilai">
            <div class="card h-100 shadow-sm border-start border-4 border-secondary">
                <div class="card-body">
                    <h5 class="fw-bold text-secondary">6. Adaptif</h5>
                    <p>yaitu cepat menyesuaikan diri menghadapi perubahan, terus berinovasi dan mengembangkan kreativitas, dan bertindak proaktif.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 offset-md-3 fade-up nilai">
            <div class="card h-100 shadow-sm border-start border-4 border-dark">
                <div class="card-body">
                    <h5 class="fw-bold text-dark">7. Kolaboratif</h5>
                    <p>yaitu memberi kesempatan kepada berbagai pihak untuk berkontribusi, terbuka dalam bekerja sama untuk menghasilkan nilai tambah, dan menggerakkan pemanfaatan berbagai sumberdaya untuk tujuan bersama.</p>
                </div>
            </div>
        </div>
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
