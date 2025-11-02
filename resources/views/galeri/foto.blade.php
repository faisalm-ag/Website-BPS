@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')
<div class="container py-5">
    <!-- Debug Info -->
    @if(config('app.debug'))
    <div class="alert alert-info">
        <h5>Debug Information:</h5>
        <ul>
            @foreach($fotos as $foto)
            <li>
                <strong>Foto: {{ $foto->nama }}</strong><br>
                Path DB: {{ $foto->file }}<br>
                Full URL: {{ asset('storage/' . $foto->file) }}<br>
                File Exists: {{ file_exists(storage_path('app/public/' . $foto->file)) ? 'Yes' : 'No' }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

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
                             alt="{{ $foto->nama }}"
                             onerror="this.onerror=null; this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{ $foto->nama }}</h5>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <div class="alert alert-info shadow-sm" role="alert">
                    <i class="fas fa-info-circle me-2"></i> Belum ada foto yang tersedia.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
