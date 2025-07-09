@extends('layouts.app')

@section('title', 'Piagam Penghargaan Pegawai Teladan')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary"><i class="fas fa-certificate me-2"></i>Piagam Penghargaan Pegawai Teladan</h2>
        <p class="text-muted">BPS Kabupaten Tasikmalaya</p>
    </div>

    @php
        $piagamFiles = [
            ['judul' => 'Triwulan I Tahun 2024 - SAEPUL', 'file' => 'Piagam Penghargaan Pegawai Teladan Trw I - 2024 ttd foto stempel.pdf'],
            ['judul' => 'Triwulan II Tahun 2024 - IKA', 'file' => 'Piagam Penghargaan Pegawai Teladan TW II 2024 - IKA.pdf'],
            ['judul' => 'Triwulan III Tahun 2024 - DUDI', 'file' => 'Piagam Penghargaan Pegawai Teladan TW III 2024 - DUDI.pdf'],
            ['judul' => 'Triwulan IV Tahun 2024 - PRIANGGA', 'file' => 'Piagam Penghargaan Pegawai Teladan TW IV 2024 - PRIANGGA.pdf'],
            ['judul' => 'Triwulan I Tahun 2025 - MUHAMAD SOBARI', 'file' => 'Piagam Penghargaan Pegawai Teladan TW 1 Tahun 2025.pdf'],
        ];
    @endphp

    @foreach ($piagamFiles as $piagam)
    <div class="card shadow-sm mb-5 fade-up border-0">
        <div class="card-body">
            <h5 class="card-title text-primary mb-3"><i class="fas fa-user-award me-2"></i>{{ $piagam['judul'] }}</h5>
            <div class="ratio ratio-16x9 border rounded overflow-hidden" style="min-height: 500px;">
                <iframe 
                    src="{{ asset('piagam/' . $piagam['file']) }}" 
                    width="100%" 
                    height="100%" 
                    frameborder="0">
                </iframe>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@push('scripts')
<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
@endpush
