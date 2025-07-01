@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Piagam Penghargaan Pegawai Teladan</h2>
        <p class="text-muted">BPS Kabupaten Tasikmalaya</p>
    </div>

    @php
        $piagamFiles = [
            [
                'judul' => 'Triwulan I Tahun 2024 - SAEPUL',
                'file' => 'Piagam Penghargaan Pegawai Teladan Trw I - 2024 ttd foto stempel.pdf'
            ],
            [
                'judul' => 'Triwulan II Tahun 2024 - IKA',
                'file' => 'Piagam Penghargaan Pegawai Teladan TW II 2024 - IKA.pdf'
            ],
            [
                'judul' => 'Triwulan III Tahun 2024 - DUDI',
                'file' => 'Piagam Penghargaan Pegawai Teladan TW III 2024 - DUDI.pdf'
            ],
            [
                'judul' => 'Triwulan IV Tahun 2024 - PRIANGGA',
                'file' => 'Piagam Penghargaan Pegawai Teladan TW IV 2024 - PRIANGGA.pdf'
            ],
            [
                'judul' => 'Triwulan I Tahun 2025 - MUHAMAD SOBARI',
                'file' => 'Piagam Penghargaan Pegawai Teladan TW 1 Tahun 2025.pdf'
            ],
        ];
    @endphp

    @foreach ($piagamFiles as $piagam)
    <div class="mb-5">
        <h5 class="mb-3">{{ $piagam['judul'] }}</h5>
        <div class="ratio ratio-16x9" style="min-height: 500px;">
            <iframe 
                src="{{ asset('storage/galeri/piagam/' . $piagam['file']) }}" 
                width="100%" 
                height="100%" 
                frameborder="0">
            </iframe>
        </div>
    </div>
    @endforeach

    <div class="alert alert-success text-center mt-5">
        <strong>Selamat Kepada Bapak Muhamad Sobari, S.ST., M.STAT.</strong><br>
        Atas Terpilihnya Menjadi Pegawai Teladan BPS Kab. Tasikmalaya TW - I Tahun 2025
    </div>
</div>
@endsection
