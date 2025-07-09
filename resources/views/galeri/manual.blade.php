@extends('layouts.app')

@section('title', 'Manual Book')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary"><i class="fas fa-book-open me-2"></i>Manual Book</h2>
        <p class="text-muted">Sistem Informasi Penilaian Kinerja - BPS Kabupaten Tasikmalaya</p>
    </div>

    <div class="card shadow-sm fade-up border-0">
        <div class="card-body p-0">
            <div class="ratio ratio-16x9" style="min-height: 600px;">
                <iframe 
                    src="{{ asset('manual/Sistem Informasi Penilaian Kinerja.pdf') }}" 
                    width="100%" 
                    height="100%" 
                    frameborder="0">
                </iframe>
            </div>
        </div>
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
