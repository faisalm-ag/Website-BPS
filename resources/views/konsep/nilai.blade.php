@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-5 fade-up">
        <h2 class="fw-bold text-primary">Nilai-Nilai Inti BPS</h2>
        <p class="text-muted fs-5">Core Values ASN dan Employer Branding</p>
    </div>

    <div class="fade-up mb-4 nilai">
        <p class="fs-5">Mengacu kepada Surat Edaran Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 20 Tahun 2021 tentang Implementasi Core Values dan Employer Branding Aparatur Sipil Negara tertanggal 26 Agustus 2021, BPS telah mengimplementasikan dan terus menyosialisasikan Core Values BerAKHLAK dan Employer Branding Bangga Melayani Bangsa</p>
        <p class="fs-5"><strong>Core Values ASN BerAKHLAK</strong> terdiri dari:</p>
    </div>

    <!-- Card BerAKHLAK -->
    <div class="row g-4 mb-5">
        @php
            $values = [
                ['title' => '1. Berorientasi Pelayanan', 'icon' => 'handshake', 'color' => 'primary'],
                ['title' => '2. Akuntabel', 'icon' => 'check-circle', 'color' => 'success'],
                ['title' => '3. Kompeten', 'icon' => 'lightbulb', 'color' => 'info'],
                ['title' => '4. Harmonis', 'icon' => 'heart', 'color' => 'danger'],
                ['title' => '5. Loyal', 'icon' => 'flag', 'color' => 'warning'],
                ['title' => '6. Adaptif', 'icon' => 'sync', 'color' => 'secondary'],
                ['title' => '7. Kolaboratif', 'icon' => 'people-arrows', 'color' => 'dark'],
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
                            '1. Berorientasi Pelayanan' => 'Komitmen memberikan pelayanan prima demi kepuasan masyarakat',
                            '2. Akuntabel' => 'Bertanggung jawab atas kepercayaan yang diberikan',
                            '3. Kompeten' => 'Terus belajar dan mengembangkan kapabilitas',
                            '4. Harmonis' => 'Saling peduli dan menghargai perbedaan',
                            '5. Loyal' => 'Berdedikasi dan mengutamakan kepentingan Bangsa dan Negara',
                            '6. Adaptif' => 'Terus berinovasi dan antusias dalam menghadapi perubahan',
                            '7. Kolaboratif' => 'Membangun kerja sama yang sinergis',
                        ])[$val['title']] !!}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Detail Panduan Perilaku -->
    <div class="fade-up mb-5 nilai">
        <p class="fs-5">Penjabaran dari core values ASN BerAKHLAK juga tertuang pada Surat Edaran Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 20 Tahun 2021 tentang Implementasi Core Values dan Employer Branding Aparatur Sipil Negara berupa panduan perilaku BerAKHLAK sebagai berikut:</p>

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
