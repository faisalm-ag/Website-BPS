@extends('layouts.app')

@section('title', 'Nilai-Nilai Inti BPS')

@section('content')
<div class="container py-5 justify">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary"><i class="fas fa-star me-2"></i>Nilai-Nilai Inti BPS</h2>
        <p class="text-muted fs-5">Core Values ASN dan Employer Branding</p>
    </div>

    <!-- List Nilai -->
    <div class="row g-4 mb-5" id="berakhlakList">
        @forelse($values as $index => $val)
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-0 rounded-4">
                <div class="card-body d-flex">
                    <div class="me-3 d-flex align-items-center justify-content-center">
                        <span class="badge bg-primary text-white rounded-circle p-3 fs-6">
                            {{ $index + 1 }}
                        </span>
                    </div>
                    <div>
                        <h6 class="fw-semibold mb-1 text-body">
                            <i class="fas fa-{{ $val->icon }} me-2 text-secondary"></i>{{ $val->title }}
                        </h6>
                        <p class="mb-0 text-body">{{ $val->description }}</p>

                        @if(is_array($val->items))
                            <ul class="mt-2 ps-3">
                                @foreach ($val->items as $item)
                                    <li class="text-body">{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @empty
            <p class="text-muted">Tidak ada data nilai inti.</p>
        @endforelse
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
