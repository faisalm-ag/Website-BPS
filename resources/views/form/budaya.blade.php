@extends('layouts.app')

@section('title', 'Penilaian Budaya Organisasi')

@section('content')
<div class="container-fluid px-3">
{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

{{-- Header --}}
<div class="container py-5">
    <div class="text-center mb-4">
        <div class="mb-3">
            <i class="fas fa-chart-pie fa-2x text-primary"></i>
        </div>
        <h2 class="fw-bold text-primary mb-2">Penilaian Budaya Organisasi</h2>
        <p class="text-muted fs-5 mb-1">Sistem Evaluasi Nilai Harapan & Kinerja</p>
        <p class="text-muted fs-5 mb-3">BPS Kabupaten Tasikmalaya</p>
    </div>
</div>

{{-- Description Section --}}
<div class="row mb-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="card-header bg-primary text-white py-3 mb-4 rounded-3">
                    <h5 class="mb-0 fw-bold">
                        <i class="fas fa-info-circle me-2"></i>Tentang Survei Ini
                    </h5>
                </div>
                <p class="mb-3">
                    Survei ini bertujuan untuk melihat gambaran Budaya Organisasi di lingkungan BPS Kabupaten Tasikmalaya.
                    Survei ini mengukur implementasi nilai dasar ASN BerAKHLAK melalui penilaian terhadap perilaku kerja pegawai
                    menggunakan indikator berikut dengan dua aspek penilaian: Nilai Harapan dan Nilai Kinerja.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- FORM --}}
<div class="card shadow-lg border-0">
    <div class="card-body">    
        <form action="{{ route('admin.budaya.store') }}" method="POST" id="surveyForm">
            @csrf

            {{-- Data Diri --}}
            <div class="card-header bg-primary text-white py-3 mb-4 rounded-3">
                <h5 class="mb-0 fw-bold"><i class="fas fa-user me-2"></i> Data Diri</h5>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->gender }}" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Umur</label>
                    <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse(Auth::user()->birth_date)->age ?? '-' }} tahun" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->education }}" readonly>
                </div>
            </div>

            {{-- Pertanyaan Dinamis --}}
            @php
                $pertanyaan = \App\Models\PertanyaanBudaya::all()->groupBy('kategori');
            @endphp

            @foreach($pertanyaan as $kategori => $items)
                <div class="table-responsive mb-4">
                    <table class="table table-bordered align-middle text-center outer-border-bold">
                        <thead>
                            <tr>
                                <th style="width: 50px;" class="fw-bold">No</th>
                                <th class="text-start border-bold">Pertanyaan - {{ $kategori }}</th>
                                <th colspan="4" class="border-bold">Nilai Harapan</th>
                                <th colspan="4" class="border-bold">Nilai Kinerja</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>1</th><th>2</th><th>3</th><th>4</th>
                                <th>1</th><th>2</th><th>3</th><th>4</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $index => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-start">{{ $item->pertanyaan }}</td>

                                    {{-- Harapan --}}
                                    @for ($h = 1; $h <= 4; $h++)
                                        <td>
                                            <input type="radio" name="harapan[{{ $item->id }}]" value="{{ $h }}" class="radio-input" required>
                                        </td>
                                    @endfor

                                    {{-- Kinerja --}}
                                    @for ($k = 1; $k <= 4; $k++)
                                        <td>
                                            <input type="radio" name="kinerja[{{ $item->id }}]" value="{{ $k }}" class="radio-input" required>
                                        </td>
                                    @endfor
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach

            {{-- Submit --}}
            <div class="text-center mt-4 mb-5">
                <button type="submit" class="btn btn-primary px-4 py-2 text-white fw-bold">
                    <i class="fas fa-paper-plane me-2"></i> Kirim Penilaian
                </button>
            </div>
        </form>
    </div>
</div>
</div>

{{-- CSS & Icon --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@push('styles')
<style>
    body { font-family: 'Poppins', sans-serif; }
    .card { border-radius: 1rem; }
    .form-select, .form-control { border-radius: 0.5rem; }
    .table-bordered { border: 2px solid #343a40 !important; }
    .table-bordered th, .table-bordered td { border: 1px solid #dee2e6; vertical-align: middle; }
    .table-bordered thead th { background-color: #f8f9fa; border-bottom: 2px solid #343a40; }
    .table-bordered tbody tr:hover { background-color: #f5f9ff; }
    .radio-input { transform: scale(1.4); cursor: pointer; accent-color: #0d6efd; }
</style>
@endpush
@endsection
