@extends('layouts.app')

@section('title', 'Leadership Budaya Organisasi')

@section('content')
<div class="container py-5 justify">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-user-tie me-2"></i>Leadership Budaya Organisasi (LeadBO)</h2>
        <p class="text-muted fs-5">Indikator Kepemimpinan dalam Implementasi BerAKHLAK</p>
        <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="mb-4 fade-up nilai">
        <p class="fs-5">
            <strong>Indikator LeadBO</strong> digunakan untuk mengukur sejauh mana pimpinan berperan aktif dalam menginternalisasi nilai-nilai <strong>BerAKHLAK</strong> ke dalam budaya kerja di lingkungan BPS. Berikut indikator-indikatornya:
        </p>
    </div>

    @php
        $leadbo = [
            'Pegawai menerima masukan secara rutin dari pimpinan mengenai implementasi nilai BerAKHLAK dalam pelaksanaan tugas sehari-hari.',
            'Pimpinan memberikan contoh yang baik dalam implementasi nilai-nilai BerAKHLAK.',
            'Pimpinan memberikan pujian ketika salah seorang bawahan memberikan pelayanan terbaik kepada stakeholder (internal dan eksternal) sesuai dengan nilai BerAKHLAK.',
            'Pimpinan melakukan program coaching yang efektif untuk membantu pegawai mengembangkan kompetensi mereka.<br><small><em>Note:</em> Coaching adalah teknik atau proses yang dilakukan untuk membuka potensi seseorang dalam rangka mengoptimalkan kinerja dan pengembangan dirinya dengan cara memberikan tools, pengetahuan, dan kesempatan yang dibutuhkan.</small>',
            'Pimpinan bukan hanya berbicara, tetapi mengambil tindakan nyata untuk meningkatkan nilai BerAKHLAK sebagai budaya organisasi.',
            'Pimpinan menekankan secara berulang pentingnya implementasi nilai-nilai BerAKHLAK dalam pekerjaan sehari-hari.',
            'Pimpinan melaksanakan program mentoring yang efektif untuk membantu pegawai mengembangkan kompetensi.<br><small><em>Note:</em> Mentoring adalah proses membimbing/melatih yang dilakukan oleh orang yang ahli di bidang tertentu terhadap pegawai yang membutuhkan peningkatan kompetensi di bidang tersebut.</small>',
            'Pimpinan mendorong seluruh bawahannya untuk selalu memberikan layanan terbaik.',
        ];

        $colors = ['primary', 'success', 'warning', 'info', 'danger', 'secondary', 'dark'];
    @endphp

    <div class="row g-4">
        @foreach ($leadbo as $i => $item)
        @php $color = $colors[$i % count($colors)]; @endphp
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-{{ $color }}">
                <div class="card-body d-flex align-items-start">
                    <h5 class="fw-bold text-{{ $color }} me-2 mb-0 mt-1">{{ $i + 1 }}.</h5>
                    <p class="mb-0">{!! $item !!}</p>
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
