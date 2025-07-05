@extends('layouts.app')

@section('title', 'Dasar Hukum')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="fas fa-balance-scale me-2"></i>Dasar Hukum</h2>
        <p class="text-muted">Dasar Hukum Umum untuk pelaksanaan Survei Budaya Organisasi BPS Kab. Tasikmalaya adalah:</p>
    </div>

    {{-- List of Legal Items --}}
    <div class="row g-4" id="legalList">
        @php
            $items = [
                'Undang-Undang Dasar Negara Republik Indonesia Tahun 1945',
                'Undang-Undang Nomor 16 Tahun 1997 tentang Statistik',
                'Undang-Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi, dan Nepotisme',
                'Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara. (Lembaran Negara Republik Indonesia Nomor 191 Tahun 2013)',
                'Peraturan Presiden Republik Indonesia Nomor 86 Tahun 2007 tentang Badan Pusat Statistik (Lembaran Negara Republik Indonesia Tahun 2007 Nomor 39)',
                'Peraturan Menteri PANRB Nomor 10 Tahun 2011 tentang Pedoman Pelaksanaan Program Manajemen Perubahan',
                'Peraturan Menteri PANRB Nomor 39 Tahun 2012 tentang Pedoman Pengembangan Budaya Kerja (Berita Negara Republik Indonesia Nomor 751 Tahun 2012)',
                'Peraturan Menteri PANRB Nomor 27 Tahun 2014 tentang Pedoman Pembangunan Agen Perubahan di Instansi Pemerintah (Berita Negara Republik Indonesia Tahun 2014 Nomor 1455)',
                'Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 25 Tahun 2020 tentang Road Map Reformasi Birokrasi 2020–2024 (Berita Negara Republik Indonesia Nomor 441 Tahun 2020) sebagaimana telah diubah dengan Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 3 Tahun 2023 tentang Perubahan Atas Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 25 Tahun 2020 tentang Road Map Reformasi Birokrasi 2020–2024 (Berita Negara Republik Indonesia Nomor 233 Tahun 2023)',
                'Peraturan Kepala BPS Nomor 7 Tahun 2013 tentang Kode Etik Pegawai di Lingkungan Badan Pusat Statistik',
                'Peraturan Kepala BPS Nomor 87 Tahun 2017 tentang Organisasi dan Tata Kerja Politeknik Statistika STIS',
                'Peraturan BPS Nomor 7 Tahun 2020 tentang Organisasi dan Tata Kerja Badan Pusat Statistik (Berita Negara Republik Indonesia Tahun 2020 Nomor 1585)',
                'Peraturan BPS Nomor 8 Tahun 2020 tentang Organisasi dan Tata Kerja BPS Provinsi dan BPS Kabupaten/Kota (Lembaran Negara Republik Indonesia Tahun 2020 Nomor 1586)'
            ];
        @endphp

        @foreach ($items as $index => $item)
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-0 rounded-4">
                <div class="card-body d-flex">
                    <div class="me-3 d-flex align-items-center">
                        <span class="badge bg-primary rounded-circle p-3 fs-6">{{ $index + 1 }}</span>
                    </div>
                    <div>
                        <p class="mb-0">{{ $item }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('styles')
<style>
    .fade-up {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-in-out;
    }
    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush

@push('scripts')
<script>
    // Scroll animation
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    // Search filter
    document.getElementById('searchInput').addEventListener('input', function () {
        const term = this.value.toLowerCase();
        document.querySelectorAll('#legalList .card').forEach(card => {
            const text = card.textContent.toLowerCase();
            card.parentElement.style.display = text.includes(term) ? 'block' : 'none';
        });
    });
</script>
@endpush
