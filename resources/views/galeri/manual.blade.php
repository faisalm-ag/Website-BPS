@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Manual Book</h2>
        <p class="text-muted">Sistem Informasi Penilaian Kinerja - BPS Kabupaten Tasikmalaya</p>
    </div>

    <div class="ratio ratio-16x9" style="min-height: 600px;">
        <iframe 
            src="{{ asset('manual/Sistem Informasi Penilaian Kinerja.pdf') }}" 
            width="100%" 
            height="100%" 
            frameborder="0">
        </iframe>
    </div>

    <div class="alert alert-success text-center mt-5">
        <strong>Selamat Kepada Bapak Muhamad Sobari, S.ST., M.STAT.</strong><br>
        Atas Terpilihnya Menjadi Pegawai Teladan BPS Kab. Tasikmalaya TW - I Tahun 2025
    </div>
</div>
@endsection
