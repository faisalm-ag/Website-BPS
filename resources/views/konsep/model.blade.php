@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary">Model Implementasi Budaya</h2>
        <p class="text-muted fs-5">Kerangka LPS (Leadership - People - System)</p>
    </div>

    <div class="fade-up mb-4">
        <p class="lead">Model implementasi budaya organisasi BPS dipengaruhi oleh tiga variabel utama yang saling terkait, yaitu <strong>Leadership</strong>, <strong>People</strong>, dan <strong>System</strong> (LPS). Ketiga variabel ini diwujudkan dalam delapan pilar utama budaya organisasi:</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4 fade-up">
            <div class="card shadow h-100 border-start border-4 border-primary">
                <div class="card-body">
                    <h5 class="card-title text-primary"><i class="fas fa-chess-king me-2"></i>Leadership</h5>
                    <p>Aspek kepemimpinan yang menunjang implementasi nilai inti BerAKHLAK:</p>
                    <ul>
                        <li><strong>Commitment</strong> yang ditunjukkan oleh seluruh pimpinan</li>
                        <li><strong>Coaching & Mentoring</strong> dari pimpinan kepada seluruh pegawai</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4 fade-up">
            <div class="card shadow h-100 border-start border-4 border-success">
                <div class="card-body">
                    <h5 class="card-title text-success"><i class="fas fa-users me-2"></i>People</h5>
                    <p>Aspek sumber daya manusia yang mencerminkan perilaku BerAKHLAK:</p>
                    <ul class="mb-0">
                        <li>Berorientasi Pelayanan</li>
                        <li>Akuntabel</li>
                        <li>Kompeten</li>
                        <li>Harmonis</li>
                        <li>Loyal</li>
                        <li>Adaptif</li>
                        <li>Kolaboratif</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4 fade-up">
            <div class="card shadow h-100 border-start border-4 border-warning">
                <div class="card-body">
                    <h5 class="card-title text-warning"><i class="fas fa-cogs me-2"></i>System</h5>
                    <p>Aspek sistem kerja yang mendukung nilai budaya:</p>
                    <ul class="mb-0">
                        <li><strong>Standard & Measurement</strong> yang jelas dan terukur</li>
                        <li><strong>Improvement & Innovation</strong> berkelanjutan</li>
                        <li><strong>Reward & Punishment</strong> yang adil dan transparan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 fade-up">
        <p class="fs-5">Model Implementasi Budaya ini membantu BPS mengidentifikasi kekuatan dan kelemahan dalam penerapan budaya kerja BerAKHLAK, serta memetakan aspek mana—Leadership, People, atau System—yang perlu ditingkatkan.</p>
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
</style>
@endpush

@push('scripts')
<script>
    // Scroll fade-up animation
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
