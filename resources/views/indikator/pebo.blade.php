@extends('layouts.app')

@section('title', 'People Budaya Organisasi (PeBO)')

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

    <div class="row g-4">
        @foreach ($indicators as $i => $item)
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-start border-4 border-{{ $item->color }}">
                <div class="card-body d-flex align-items-start">
                    <h5 class="fw-bold text-{{ $item->color }} me-2 mb-0 mt-1">{{ $i + 1 }}.</h5>
                    <p class="mb-0">{{ $item->content }}</p>
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
