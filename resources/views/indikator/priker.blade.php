@extends('layouts.app')

@section('title', 'Perilaku Kerja Pegawai (PriKer)')

@section('content')
<div class="container py-5 justify">
    <div class="mb-5 text-center">
        <h2 class="fw-bold text-primary"><i class="fas fa-user-check me-2"></i>Perilaku Kerja Pegawai (PriKer)</h2>
        <p class="text-muted fs-5">Indikator Penilaian Budaya BerAKHLAK</p>
        <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="mb-4 fade-up nilai">
        <p class="fs-5">Indikator <strong>Perilaku Kerja Pegawai (PriKer)</strong> mengacu pada nilai-nilai inti <strong>BerAKHLAK</strong> dan dijadikan sebagai acuan dalam penilaian budaya kerja di lingkungan BPS. Berikut adalah indikatornya:</p>
    </div>

    <div class="row g-4">
        @foreach($prikers as $index => $priker)
        <div class="col-md-6 fade-up nilai {{ $index == count($prikers)-1 ? 'offset-md-3' : '' }}">
            <div class="card h-100 shadow-sm border-start border-4 border-{{ $priker->warna }}">
                <div class="card-body">
                    <h5 class="fw-bold text-{{ $priker->warna }}">{{ $loop->iteration }}. {{ $priker->judul }}</h5>
                    <p>{{ $priker->deskripsi }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
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
