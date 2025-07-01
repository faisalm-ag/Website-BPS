@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Foto - Foto Kegiatan</h2>
        <p class="text-muted">Dokumentasi Serah Terima Penghargaan Pegawai Teladan</p>
    </div>

    <div class="row g-4">
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
            <div class="card bg-dark text-white shadow-sm">
                <img src="{{ asset('storage/galeri/foto/' . $foto['file']) }}" class="card-img-top" alt="{{ $foto['nama'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $foto['nama'] }}</h5>
                    <a href="{{ asset('storage/galeri/foto/' . $foto['file']) }}" download class="btn btn-outline-light btn-sm">Download</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="alert alert-success text-center mt-5">
        <strong>Selamat Kepada Bapak Muhamad Sobari, S.ST., M.STAT.</strong><br>
        Atas Terpilihnya Menjadi Pegawai Teladan BPS Kab. Tasikmalaya TW - I Tahun 2025
    </div>
</div>
@endsection
