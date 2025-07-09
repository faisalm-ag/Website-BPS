@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary"><i class="fas fa-image me-2"></i>Foto - Foto Kegiatan</h2>
        <p class="text-muted">Dokumentasi Serah Terima Penghargaan Pegawai Teladan</p>
    </div>

    <div class="row g-4 fade-up">
        @php
            $fotos = [
                ['nama' => 'Triwulan I Tahun 2024', 'file' => 'triwulan1_2024.jpg'],
                ['nama' => 'Triwulan II Tahun 2024', 'file' => 'triwulan2_2024.jpg'],
                ['nama' => 'Triwulan III Tahun 2024', 'file' => 'triwulan3_2024.jpg'],
                ['nama' => 'Triwulan IV Tahun 2024', 'file' => 'triwulan4_2024.jpg'],
                ['nama' => 'Triwulan I Tahun 2025', 'file' => 'triwulan1_2025.jpg'],
            ];
        @endphp

        @foreach ($fotos as $foto)
        <div class="col-md-6 col-lg-4">
            <div class="card gallery-card border-0 shadow-sm h-100 overflow-hidden">
                <div class="gallery-image-wrapper">
                    <img src="{{ asset('foto/' . $foto['file']) }}" class="card-img-top" alt="{{ $foto['nama'] }}">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">{{ $foto['nama'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')
<style>
    .gallery-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .gallery-image-wrapper {
        overflow: hidden;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .gallery-image-wrapper img {
        transition: transform 0.4s ease;
        width: 100%;
        height: 230px;
        object-fit: cover;
    }

    .gallery-image-wrapper:hover img {
        transform: scale(1.05);
    }
</style>
@endpush

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
