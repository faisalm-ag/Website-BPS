@extends('layouts.app')

@section('title', 'Model Implementasi Budaya')

@section('content')
<div class="container py-5 justify">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-puzzle-piece me-2"></i>Model Implementasi Budaya
        </h2>
        <p class="text-muted fs-5">Kerangka LPS (Leadership - People - System)</p>
    </div>

    <div class="fade-up mb-4 nilai">
        <p class="lead">
            Penerapan Model implementasi budaya organisasi BPS dipengaruhi oleh tiga variabel utama yang saling terkait, yaitu 
            <strong>Leadership</strong>, <strong>People</strong>, dan <strong>System</strong> (LPS). 
            Ketiga variabel ini diwujudkan dalam delapan pilar utama budaya organisasi:
        </p>
    </div>

    {{-- Data dari database --}}
    <div class="row g-4">
        @foreach($models as $index => $item)
        <div class="col-md-6 col-lg-4 fade-up">
            <div class="card h-100 shadow-sm border-0 rounded-4">
                <div class="card-body d-flex">
                    <div class="me-3 d-flex align-items-start justify-content-center">
                        <span class="badge bg-{{ $item->color }} text-white rounded-circle p-3 fs-6"
                            style="color: #fff !important;">
                            {{ $index + 1 }}
                        </span>
                    </div>
                    <div>
                        <h6 class="fw-semibold text-{{ $item->color }} mb-2">
                            <i class="fas fa-{{ $item->icon }} me-2 text-secondary"></i>{{ $item->title }}
                        </h6>
                        <p class="text-body mb-2">{{ $item->description }}</p>
                        @if(!empty($item->points))
                            <ul class="text-body ps-3 mb-0">
                                @foreach($item->points as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-5 fade-up nilai">
        <p class="fs-5">
            Model Implementasi Budaya dapat mengidentifikasi kekuatan dan kelemahan dari implementasi BerAKHLAK. 
            Model ini mampu memetakan pilar mana yang perlu ditingkatkan dari 3 variabel budaya Leadership, People atau System.
        </p>
    </div>
</div>
@endsection

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
