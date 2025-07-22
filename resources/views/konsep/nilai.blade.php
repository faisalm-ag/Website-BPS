@extends('layouts.app')

@section('content')
<div class="container py-5 justify">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary"><i class="fas fa-star me-2"></i>Nilai-Nilai Inti BPS</h2>
        <p class="text-muted fs-5">Core Values ASN dan Employer Branding</p>
    </div>

    <div class="fade-up mb-4 nilai">
        <p class="fs-5">Mengacu kepada Surat Edaran Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 20 Tahun 2021 tentang Implementasi Core Values dan Employer Branding Aparatur Sipil Negara tertanggal 26 Agustus 2021, BPS telah mengimplementasikan dan terus menyosialisasikan Core Values BerAKHLAK dan Employer Branding Bangga Melayani Bangsa</p>
        <p class="fs-5"><strong>Core Values ASN BerAKHLAK</strong> terdiri dari:</p>
    </div>

<!-- List BerAKHLAK - Bersih, Profesional, dengan Icon di Judul -->
<div class="row g-4 mb-5" id="berakhlakList">
    @php
        $values = [
            ['title' => 'Berorientasi Pelayanan', 'icon' => 'handshake', 'description' => 'Komitmen memberikan pelayanan prima demi kepuasan masyarakat'],
            ['title' => 'Akuntabel', 'icon' => 'check-circle', 'description' => 'Bertanggung jawab atas kepercayaan yang diberikan'],
            ['title' => 'Kompeten', 'icon' => 'lightbulb', 'description' => 'Terus belajar dan mengembangkan kapabilitas'],
            ['title' => 'Harmonis', 'icon' => 'heart', 'description' => 'Saling peduli dan menghargai perbedaan'],
            ['title' => 'Loyal', 'icon' => 'flag', 'description' => 'Berdedikasi dan mengutamakan kepentingan Bangsa dan Negara'],
            ['title' => 'Adaptif', 'icon' => 'sync', 'description' => 'Terus berinovasi dan antusias dalam menghadapi perubahan'],
            ['title' => 'Kolaboratif', 'icon' => 'people-arrows', 'description' => 'Membangun kerja sama yang sinergis'],
        ];
    @endphp

    @foreach($values as $index => $val)
    <div class="col-md-6 fade-up">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body d-flex">
                <!-- Badge nomor bulat -->
                <div class="me-3 d-flex align-items-center justify-content-center">
                    <span class="badge bg-primary text-white rounded-circle p-3 fs-6">
                        {{ $index + 1 }}
                    </span>
                </div>
                <!-- Judul + deskripsi -->
                <div>
                    <h6 class="fw-semibold mb-1 text-body">
                        <i class="fas fa-{{ $val['icon'] }} me-2 text-secondary"></i>{{ $val['title'] }}
                    </h6>
                    <p class="mb-0 text-body">{{ $val['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

    <!-- Detail Panduan Perilaku -->
    <div class="fade-up mb-5 nilai">
    <p class="fs-5">
        Penjabaran dari core values ASN BerAKHLAK juga tertuang pada Surat Edaran Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 20 Tahun 2021 tentang Implementasi Core Values dan Employer Branding Aparatur Sipil Negara berupa panduan perilaku BerAKHLAK sebagai berikut:
    </p>

    @php
        $details = [
            ['title' => 'Berorientasi Pelayanan', 'icon' => 'handshake', 'items' => [
                'Memahami dan memenuhi kebutuhan masyarakat',
                'Ramah, cekatan, solutif, dan dapat diandalkan',
                'Melakukan perbaikan tiada henti',
            ]],
            ['title' => 'Akuntabel', 'icon' => 'check-circle', 'items' => [
                'Melaksanakan tugas dengan jujur, tanggung jawab, cermat, disiplin, dan integritas tinggi',
                'Gunakan kekayaan/barang negara secara efisien',
                'Tidak menyalahgunakan kewenangan jabatan',
            ]],
            ['title' => 'Kompeten', 'icon' => 'lightbulb', 'items' => [
                'Tingkatkan kompetensi diri',
                'Bantu orang lain belajar',
                'Kerja dengan kualitas terbaik',
            ]],
            ['title' => 'Harmonis', 'icon' => 'heart', 'items' => [
                'Menghargai setiap orang',
                'Suka menolong',
                'Membangun lingkungan kerja kondusif',
            ]],
            ['title' => 'Loyal', 'icon' => 'flag', 'items' => [
                'Memegang teguh ideologi dan konstitusi',
                'Menjaga nama baik ASN, pimpinan, dan negara',
                'Menjaga rahasia jabatan dan negara',
            ]],
            ['title' => 'Adaptif', 'icon' => 'sync', 'items' => [
                'Cepat menyesuaikan diri',
                'Terus berinovasi dan kreatif',
                'Bertindak proaktif',
            ]],
            ['title' => 'Kolaboratif', 'icon' => 'people-arrows', 'items' => [
                'Buka kesempatan kontribusi dari berbagai pihak',
                'Terbuka dalam bekerja sama',
                'Manfaatkan sumber daya untuk tujuan bersama',
            ]],
        ];
    @endphp

    <div class="row g-4">
        @foreach($details as $index => $detail)
        <div class="col-md-6 fade-up">
            <div class="card h-100 shadow-sm border-0 rounded-4">
                <div class="card-body d-flex">
                    <div class="me-3 d-flex align-items-start justify-content-center">
                        <span class="badge bg-primary text-white rounded-circle p-3 fs-6">
                            {{ $index + 1 }}
                        </span>
                    </div>
                    <div>
                        <h6 class="fw-semibold text-body mb-2">
                            <i class="fas fa-{{ $detail['icon'] }} me-2 text-secondary"></i>{{ $detail['title'] }}
                        </h6>
                        <ul class="mb-0 ps-3">
                            @foreach($detail['items'] as $item)
                            <li class="text-body">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    <div class="fade-up mb-5 nilai">
        <p class="fs-5">Nilai-nilai dasar BerAKHLAK menjadi dasar penguatan budaya kerja di BPS untuk mendukung pencapaian kinerja individu dan tujuan organisasi/instansi sehingga perlu dilihat seberapa besar implementasi nilai dasar tersebut di BPS. Berdasarkan Road Map Nasional Penguatan Budaya Kerja ASN BerAKHLAK, setelah pencanangan tahun 2021, tahapan selanjutnya pada tahun 2022 adalah sosialisasi dan internalisasi budaya BerAKHLAK. BPS telah melaksanakan berbagai sosialisasi dan internalisasi tersebut, sehingga pada tahun 2023 dilaksanakan SBO untuk menilai seberapa besar implementasi BerAKHLAK di BPS.</p>
    </div>
</div>
@endsection

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
