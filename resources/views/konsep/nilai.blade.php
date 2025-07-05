@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary">Nilai-Nilai Inti BPS</h2>
        <p class="text-muted fs-5">Core Values ASN dan Employer Branding</p>
    </div>

    <div class="fade-up mb-4">
        <p class="fs-5">Mengacu kepada <strong>SE MenPAN-RB No. 20 Tahun 2021</strong> tentang Implementasi Core Values dan Employer Branding ASN tertanggal 26 Agustus 2021, BPS telah mengimplementasikan serta menyosialisasikan Core Values <strong>BerAKHLAK</strong> dan Employer Branding <strong>Bangga Melayani Bangsa</strong>.</p>
        <p class="fs-5"><strong>Core Values ASN BerAKHLAK</strong> terdiri dari:</p>
    </div>

    <!-- Card BerAKHLAK -->
    <div class="row g-4 mb-5">
        @php
            $values = [
                ['title' => 'Berorientasi Pelayanan', 'icon' => 'handshake', 'color' => 'primary'],
                ['title' => 'Akuntabel', 'icon' => 'check-circle', 'color' => 'success'],
                ['title' => 'Kompeten', 'icon' => 'lightbulb', 'color' => 'info'],
                ['title' => 'Harmonis', 'icon' => 'heart', 'color' => 'danger'],
                ['title' => 'Loyal', 'icon' => 'flag', 'color' => 'warning'],
                ['title' => 'Adaptif', 'icon' => 'sync', 'color' => 'secondary'],
                ['title' => 'Kolaboratif', 'icon' => 'people-arrows', 'color' => 'dark'],
            ];
        @endphp

        @foreach($values as $val)
        <div class="col-md-6 col-lg-4 fade-up">
            <div class="card border-start border-4 border-{{ $val['color'] }} shadow h-100 hover-grow">
                <div class="card-body">
                    <h5 class="card-title text-{{ $val['color'] }}">
                        <i class="fas fa-{{ $val['icon'] }} me-2"></i>{{ $val['title'] }}
                    </h5>
                    <p class="card-text">
                        {!! collect([
                            'Berorientasi Pelayanan' => 'Komitmen memberikan pelayanan prima demi kepuasan masyarakat',
                            'Akuntabel' => 'Bertanggung jawab atas kepercayaan yang diberikan',
                            'Kompeten' => 'Terus belajar dan mengembangkan kapabilitas',
                            'Harmonis' => 'Saling peduli dan menghargai perbedaan',
                            'Loyal' => 'Berdedikasi dan mengutamakan kepentingan Bangsa dan Negara',
                            'Adaptif' => 'Terus berinovasi dan antusias dalam menghadapi perubahan',
                            'Kolaboratif' => 'Membangun kerja sama yang sinergis',
                        ])[$val['title']] !!}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Detail Panduan Perilaku -->
    <div class="fade-up mb-5">
        <p class="fs-5"><strong>Panduan Perilaku BerAKHLAK</strong> sesuai SE MenPAN-RB No. 20 Tahun 2021:</p>

        @php
            $details = [
                'Berorientasi Pelayanan' => [
                    'Memahami dan memenuhi kebutuhan masyarakat',
                    'Ramah, cekatan, solutif, dan dapat diandalkan',
                    'Melakukan perbaikan tiada henti',
                ],
                'Akuntabel' => [
                    'Melaksanakan tugas dengan jujur, tanggung jawab, cermat, disiplin, dan integritas tinggi',
                    'Gunakan kekayaan/barang negara secara efisien',
                    'Tidak menyalahgunakan kewenangan jabatan',
                ],
                'Kompeten' => [
                    'Tingkatkan kompetensi diri',
                    'Bantu orang lain belajar',
                    'Kerja dengan kualitas terbaik',
                ],
                'Harmonis' => [
                    'Menghargai setiap orang',
                    'Suka menolong',
                    'Membangun lingkungan kerja kondusif',
                ],
                'Loyal' => [
                    'Memegang teguh ideologi dan konstitusi',
                    'Menjaga nama baik ASN, pimpinan, dan negara',
                    'Menjaga rahasia jabatan dan negara',
                ],
                'Adaptif' => [
                    'Cepat menyesuaikan diri',
                    'Terus berinovasi dan kreatif',
                    'Bertindak proaktif',
                ],
                'Kolaboratif' => [
                    'Buka kesempatan kontribusi dari berbagai pihak',
                    'Terbuka dalam bekerja sama',
                    'Manfaatkan sumber daya untuk tujuan bersama',
                ]
            ];
        @endphp

        @foreach($details as $judul => $list)
            <h5 class="mt-4 text-primary"><i class="fas fa-check-circle me-2"></i>{{ $loop->iteration }}. {{ $judul }}</h5>
            <ul>
                @foreach($list as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endforeach
    </div>

    <div class="fade-up mb-5">
        <p class="fs-5"><strong>Nilai dasar BerAKHLAK</strong> menjadi dasar penguatan budaya kerja di BPS untuk mendukung pencapaian kinerja individu dan tujuan instansi.</p>
        <p class="fs-5">Sesuai Road Map Nasional Penguatan Budaya Kerja ASN:</p>
        <ul>
            <li>2021: Pencanangan BerAKHLAK</li>
            <li>2022: Sosialisasi dan Internalisasi</li>
            <li>2023: Pelaksanaan SBO untuk mengukur implementasi</li>
        </ul>
        <p class="fs-5">BPS telah menjalankan tahapan tersebut secara konsisten.</p>
    </div>
</div>
@endsection

@push('styles')
<style>
    .fade-up {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-in-out;
    }

    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .hover-grow {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-grow:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
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
