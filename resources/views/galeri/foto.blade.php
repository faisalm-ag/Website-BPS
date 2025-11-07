@extends('layouts.app')

@section('title', 'Galeri Foto')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-images me-2"></i>Galeri Foto</h2>
        <p class="text-muted">Dokumentasi kegiatan BPS Kabupaten Tasikmalaya</p>
    </div>

    <div class="row g-4">
        @forelse($fotos as $foto)
            <div class="col-md-4 col-sm-6 fade-up">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('storage/' . $foto->file) }}" class="card-img-top" alt="{{ $foto->nama }}">
                    <div class="card-body text-center">
                        <h6 class="fw-semibold">{{ $foto->nama }}</h6>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center text-muted">Belum ada foto di galeri.</div>
        @endforelse
    </div>
</div>
@endsection

@push('scripts')
<script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
@endpush
