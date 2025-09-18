@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')
<div class="container py-5">
    <!-- Judul Halaman -->
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-image me-2"></i> Foto - Foto Kegiatan
        </h2>
        <p class="text-muted">Dokumentasi Serah Terima Penghargaan Pegawai Teladan</p>
    </div>

    <!-- Konten Galeri -->
    <div class="row g-4 fade-up">
        @forelse ($fotos as $foto)
            <div class="col-md-6 col-lg-4">
                <div class="card gallery-card border-0 shadow-sm h-100 overflow-hidden">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('storage/' . $foto->file) }}" 
                             class="card-img-top" 
                             alt="{{ $foto->nama }}">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{ $foto->nama }}</h5>
                    </div>
                </div>
            </div>
        @empty
            <!-- Jika tidak ada foto -->
            <div class="col-12 text-center">
                <div class="alert alert-info shadow-sm" role="alert">
                    <i class="fas fa-info-circle me-2"></i> Belum ada foto yang tersedia.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
