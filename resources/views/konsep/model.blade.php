@extends('layouts.app')

@section('content')
<div class="container py-4 justify">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-puzzle-piece me-2"></i>Model Implementasi Budaya
        </h2>
        <p class="text-muted fs-5">Kerangka LPS (Leadership - People - System)</p>
    </div>

    <div class="fade-up mb-4 nilai">
        <p class="lead">
            Model implementasi budaya organisasi BPS dipengaruhi oleh tiga variabel utama yang saling terkait, yaitu 
            <strong>Leadership</strong>, <strong>People</strong>, dan <strong>System</strong> (LPS). 
            Ketiga variabel ini diwujudkan dalam delapan pilar utama budaya organisasi:
        </p>
    </div>

    @php
        $models = [
            [
                'title' => 'Leadership',
                'icon' => 'chess-king',
                'color' => 'primary',
                'desc' => 'Aspek kepemimpinan yang menunjang implementasi nilai inti BerAKHLAK:',
                'list' => [
                    'Commitment yang ditunjukkan oleh seluruh pimpinan',
                    'Coaching & Mentoring dari pimpinan kepada seluruh pegawai'
                ]
            ],
            [
                'title' => 'People',
                'icon' => 'users',
                'color' => 'primary',
                'desc' => 'Aspek sumber daya manusia yang mencerminkan perilaku BerAKHLAK:',
                'list' => [
                    'Berorientasi Pelayanan',
                    'Akuntabel',
                    'Kompeten',
                    'Harmonis',
                    'Loyal',
                    'Adaptif',
                    'Kolaboratif'
                ]
            ],
            [
                'title' => 'System',
                'icon' => 'cogs',
                'color' => 'primary',
                'desc' => 'Aspek sistem kerja yang mendukung nilai budaya:',
                'list' => [
                    'Standard & Measurement yang jelas dan terukur',
                    'Improvement & Innovation berkelanjutan',
                    'Reward & Punishment yang adil dan transparan'
                ]
            ]
        ];
    @endphp

    <div class="row g-4">
        @foreach($models as $index => $item)
        <div class="col-md-6 col-lg-4 fade-up">
            <div class="card h-100 shadow-sm border-0 rounded-4">
                <div class="card-body d-flex">
                    <div class="me-3 d-flex align-items-start justify-content-center">
                        <span class="badge bg-{{ $item['color'] }} text-white rounded-circle p-3 fs-6">
                            {{ $index + 1 }}
                        </span>
                    </div>
                    <div>
                        <h6 class="fw-semibold text-{{ $item['color'] }} mb-2">
                            <i class="fas fa-{{ $item['icon'] }} me-2 text-secondary"></i>{{ $item['title'] }}
                        </h6>
                        <p class="text-body mb-2">{{ $item['desc'] }}</p>
                        <ul class="text-body ps-3 mb-0">
                            @foreach($item['list'] as $point)
                            <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-5 fade-up nilai">
        <p class="fs-5">
            Model Implementasi Budaya ini membantu BPS mengidentifikasi kekuatan dan kelemahan dalam penerapan budaya kerja BerAKHLAK, serta memetakan aspek mana—Leadership, People, atau System—yang perlu ditingkatkan.
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
