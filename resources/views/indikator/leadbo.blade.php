@extends('layouts.app')

@section('content')
<div class="container py-4 justify">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Leadership Budaya Organisasi (LeadBO)</h2>
        <p class="text-muted fs-5">Indikator Kepemimpinan dalam Implementasi BerAKHLAK</p>
        <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="mb-4 fade-up nilai">
        <p class="fs-5">
            <strong>Indikator LeadBO</strong> digunakan untuk mengukur sejauh mana pimpinan berperan aktif dalam menginternalisasi nilai-nilai BerAKHLAK ke dalam budaya kerja di lingkungan BPS. Berikut indikator-indikatornya:
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <p class="mb-0">1. Pegawai menerima masukan secara rutin dari pimpinan mengenai implementasi nilai BerAKHLAK dalam pelaksanaan tugas sehari-hari.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <p class="mb-0">2. Pimpinan memberikan contoh yang baik dalam implementasi nilai-nilai BerAKHLAK.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-warning">
                <div class="card-body">
                    <p class="mb-0">3. Pimpinan memberikan pujian ketika salah seorang bawahan memberikan pelayanan terbaik kepada stakeholder (internal dan eksternal) sesuai dengan nilai BerAKHLAK.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-info">
                <div class="card-body">
                    <p class="mb-1">4. Pimpinan melakukan program coaching yang efektif untuk membantu pegawai mengembangkan kompetensi mereka.</p>
                    <small><em>Note:</em> Coaching adalah teknik atau proses yang dilakukan untuk membuka potensi seseorang dalam rangka mengoptimalkan kinerja dan pengembangan dirinya dengan cara memberikan tools, pengetahuan, dan kesempatan yang dibutuhkan.</small>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-danger">
                <div class="card-body">
                    <p class="mb-0">5. Pimpinan bukan hanya berbicara, tetapi mengambil tindakan nyata untuk meningkatkan nilai BerAKHLAK sebagai budaya organisasi.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-secondary">
                <div class="card-body">
                    <p class="mb-0">6. Pimpinan menekankan secara berulang pentingnya implementasi nilai-nilai BerAKHLAK dalam pekerjaan sehari-hari.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-dark">
                <div class="card-body">
                    <p class="mb-1">7. Pimpinan melaksanakan program mentoring yang efektif untuk membantu pegawai mengembangkan kompetensi.</p>
                    <small><em>Note:</em>  Mentoring adalah proses membimbing/melatih yang dilakukan oleh orang yang ahli di bidang tertentu terhadap pegawai yang membutuhkan peningkatan kompetensi di bidang tersebut.</small>
                </div>
            </div>
        </div>

        <div class="col-md-6 fade-up">
            <div class="card shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <p class="mb-0">8. Pimpinan mendorong seluruh bawahannya untuk selalu memberikan layanan terbaik.</p>
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
