@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Judul Halaman -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-bps">Hasil Penilaian Pegawai Teladan</h1>
        <p class="fs-5 text-muted">Berikut daftar pegawai yang terpilih sebagai pegawai teladan di lingkungan BPS Kabupaten Tasikmalaya</p>
    </div>

    <!-- Data Pegawai Teladan -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- TW I 2025 -->
        <div class="col">
            <div class="card shadow-sm h-100 border-0 transition hover-shadow">
                <div class="card-header bg-bps-blue text-white text-center">
                    <h5 class="mb-0">Triwulan I - 2025</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('foto/tandatanya.jpg') }}" alt="Muhamad Sobari" class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover;">
                    <h5 class="fw-bold text-bps">Muhamad Sobari, S.ST., M.Stat.</h5>
                    <p class="text-muted">Statistisi Ahli Muda</p>
                    <span class="badge bg-success">Nilai: 95/100</span>
                </div>
            </div>
        </div>

        <!-- TW I 2024 -->
        <div class="col">
            <div class="card shadow-sm h-100 border-0 transition hover-shadow">
                <div class="card-header bg-secondary text-white text-center">
                    <h5 class="mb-0">Triwulan I - 2024</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('foto/tandatanya.jpg') }}" alt="Iis Irmawati" class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover;">
                    <h5 class="fw-bold text-secondary">Iis Irmawati, A.Md.</h5>
                    <p class="text-muted">Pranata Komputer</p>
                    <span class="badge bg-success">Nilai: 91/100</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm h-100 border-0 transition hover-shadow">
                <div class="card-header bg-secondary text-white text-center">
                    <h5 class="mb-0">Triwulan III - 2025</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('foto/tandatanya.jpg') }}" alt="Iis Irmawati" class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover;">
                    <h5 class="fw-bold text-secondary">Aldy Abdu Aziz Muzadilah Phd</h5>
                    <p class="text-muted">Tecnologi Sains</p>
                    <span class="badge bg-secondary">Nilai: 100/100</span>
                </div>
            </div>
        </div>

        <!-- Tambahkan kartu lain di sini jika perlu -->
    </div>
</div>
@endsection

@push('styles')
<style>
    .body{
        padding-top: 55px;
    }
    .text-bps {
        color: #2c3e50;
    }

    .bg-bps-blue {
        background-color: #2c3e50 !important;
    }

    .transition {
        transition: all 0.3s ease;
    }

    .hover-shadow:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush
