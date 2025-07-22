@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center mb-5 fade-up">
        <div class="mb-3">
            <i class="fas fa-trophy fa-3x text-warning"></i>
        </div>
        <h1 class="fw-bold display-4 text-primary">Pegawai Teladan</h1>
        <p class="lead">BPS Kabupaten Tasikmalaya</p>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <p class="fs-5">
                    Berikut adalah daftar pegawai yang terpilih sebagai pegawai teladan di lingkungan BPS Kabupaten Tasikmalaya berdasarkan penilaian triwulanan yang objektif dan transparan.
                </p>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="row mb-4">
        <div class="col-12 text-end">
            <label for="filterTahun" class="form-label fw-semibold me-2">Filter Tahun:</label>
            <select id="filterTahun" class="form-select d-inline-block w-auto">
                <option value="all">Semua Tahun</option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
            </select>
        </div>
    </div>

    <!-- Statistics Overview -->
    <div class="row mb-5 fade-up">
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100 bg-primary">
                <div class="card-body text-center text-white">
                    <i class="fas fa-trophy fa-2x mb-2 text-white"></i>
                    <h3 class="fw-bold mb-1 text-white">5</h3>
                    <p class="mb-0 text-white">Total Pemenang</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100 bg-success">
                <div class="card-body text-center text-white">
                    <i class="fas fa-calendar-alt fa-2x mb-2 text-white"></i>
                    <h3 class="fw-bold mb-1 text-white">5</h3>
                    <p class="mb-0 text-white">Triwulan Selesai</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100 bg-info">
                <div class="card-body text-center text-white">
                    <i class="fas fa-star fa-2x mb-2 text-white"></i>
                    <h3 class="fw-bold mb-1 text-white">96.7</h3>
                    <p class="mb-0 text-white">Rata-rata Nilai</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm h-100 bg-warning">
                <div class="card-body text-center text-dark">
                    <i class="fas fa-users fa-2x mb-2 text-dark"></i>
                    <h3 class="fw-bold mb-1 text-dark">46</h3>
                    <p class="mb-0 text-dark">Total Pegawai</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Pegawai Teladan 2025 -->
    <div class="data-tahun" data-tahun="2025">
        <div class="row mb-4 fade-up">
            <div class="col-12">
                <h2 class="fw-bold text-primary border-bottom border-3 border-primary pb-2">
                    <i class="fas fa-calendar me-2"></i>Tahun 2025
                </h2>
            </div>
        </div>

        <!-- TW I 2025 - Featured Winner -->
        <div class="row mb-5 fade-up">
            <div class="col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary py-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="mb-1 fw-bold text-white">
                                    <i class="fas fa-crown me-2 text-warning"></i>
                                    Triwulan I - 2025 (Pemenang Terbaru)
                                </h3>
                                <p class="mb-0 text-white">Periode Januari - Maret 2025</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <span class="badge bg-warning text-dark px-4 py-2 fs-5">
                                    <i class="fas fa-trophy me-1"></i>Juara
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <img src="{{ asset('foto/tw_sobari.png') }}" 
                                     alt="Muhamad Sobari" 
                                     class="img-fluid rounded shadow-lg"
                                     style="width: 100%; height: auto;">
                            </div>
                            <div class="col-md-8">
                                <h3 class="fw-bold text-primary mb-3">Muhamad Sobari, S.ST., M.Stat.</h3>
                                
                                <!-- Info Detail -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <strong>Jabatan:</strong> Statistisi Ahli Muda
                                        </div>
                                        <div class="mb-2">
                                            <strong>NIP:</strong> 198705152010121003
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <strong>Pendidikan:</strong> Magister Statistika
                                        </div>
                                        <div class="mb-2">
                                            <strong>Unit Kerja:</strong> BPS Kabupaten Tasikmalaya
                                        </div>
                                    </div>
                                </div>

                                <!-- Nilai -->
                                <div class="row text-center mb-4">
                                    <div class="col-md-3">
                                        <div class="p-3 bg-light rounded">
                                            <h4 class="fw-bold text-success mb-1">96.2</h4>
                                            <small>PeBO</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="p-3 bg-light rounded">
                                            <h4 class="fw-bold text-primary mb-1">94.5</h4>
                                            <small>Presensi</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="p-3 bg-light rounded">
                                            <h4 class="fw-bold text-info mb-1">94.3</h4>
                                            <small>Kipapp</small>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="p-3 bg-success rounded">
                                            <h4 class="fw-bold mb-1 text-white">95.0</h4>
                                            <small class="text-white">Nilai Akhir</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Prestasi -->
                                <div>
                                    <h5 class="fw-bold mb-3">
                                        <i class="fas fa-medal me-2"></i>Pencapaian Utama
                                    </h5>
                                    <ul class="mb-0">
                                        <li class="mb-1">Konsistensi tinggi dalam implementasi nilai BerAKHLAK</li>
                                        <li class="mb-1">Kontribusi signifikan dalam peningkatan kualitas data statistik</li>
                                        <li class="mb-1">Kemampuan leadership yang baik dalam tim</li>
                                        <li class="mb-0">Inovasi dalam metodologi survei statistik</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Pegawai Teladan 2024 -->
    <div class="data-tahun" data-tahun="2024">
        <div class="row mb-4 fade-up">
            <div class="col-12">
                <h2 class="fw-bold text-secondary border-bottom border-3 border-secondary pb-2">
                    <i class="fas fa-calendar me-2"></i>Tahun 2024
                </h2>
            </div>
        </div>

        @php
            $pegawai2024 = [
                1 => [
                    'nama' => 'Iis Irmawati, A.Md.',
                    'jabatan' => 'Pranata SDM Aparatur Mahir',
                    'nip' => '198601012009012001',
                    'pangkat' => 'Penata (III/c)',
                    'pendidikan' => 'Diploma III',
                    'nilai_akhir' => 96.04,
                    'foto' => 'tw_Iis.jpeg',
                    'rating_kerja' => '3.91 (29.35)',
                    'presensi' => '4.00 (40.00)',
                    'berakhlak' => '3.56 (26.69)',
                    'periode' => 'Januari - Maret 2024',
                    'color' => 'success'
                ],
                2 => [
                    'nama' => 'Ika Nuryani, SST, M.Stat.',
                    'jabatan' => 'Statistisi Ahli Muda',
                    'nip' => '198411142008012007',
                    'pangkat' => 'Pembina (IV/a)',
                    'pendidikan' => 'Magister Statistika',
                    'nilai_akhir' => 98.40,
                    'foto' => 'tw_ika.jpg',
                    'rating_kerja' => '3.92 (29.40)',
                    'presensi' => '4.00 (40.00)',
                    'berakhlak' => '3.87 (29.00)',
                    'periode' => 'April - Juni 2024',
                    'color' => 'info'
                ],
                3 => [
                    'nama' => 'Dudi Suryadi, S.E, M.P., M.Sc.',
                    'jabatan' => 'Statistisi Ahli Muda',
                    'nip' => '198312012011011010',
                    'pangkat' => 'Penata (III/c)',
                    'pendidikan' => 'Magister Ekonomi Pertanian',
                    'nilai_akhir' => 95.85,
                    'foto' => 'tw_dudi.jpg',
                    'rating_kerja' => '3.82 (28.64)',
                    'presensi' => '4.00 (40.00)',
                    'berakhlak' => '3.63 (27.22)',
                    'periode' => 'Juli - September 2024',
                    'color' => 'warning'
                ],
                4 => [
                    'nama' => 'Priangga Andrew Wirawan, S.ST.',
                    'jabatan' => 'Statistisi Ahli Pertama',
                    'nip' => '199405202017011002',
                    'pangkat' => 'Penata Muda Tk.I (III/b)',
                    'pendidikan' => 'Sarjana Terapan Statistika',
                    'nilai_akhir' => 96.40,
                    'foto' => 'tw_wira.jpg',
                    'rating_kerja' => '3.86 (28.97)',
                    'presensi' => '4.00 (40.00)',
                    'berakhlak' => '3.66 (27.43)',
                    'periode' => 'Oktober - Desember 2024',
                    'color' => 'danger'
                ]
            ];

            $triwulanRomawi = ['', 'I', 'II', 'III', 'IV'];
        @endphp

        <div class="row">
            @foreach($pegawai2024 as $triwulan => $data)
            <div class="col-lg-6 mb-4 fade-up">
                <div class="card border-0 shadow h-100">
                    <div class="card-header bg-{{ $data['color'] }} py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-bold text-white">
                                <i class="fas fa-award me-2"></i>
                                Triwulan {{ $triwulanRomawi[$triwulan] }} - 2024
                            </h5>
                            <span class="badge bg-white text-dark">
                                {{ $data['periode'] }}
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <!-- Profile Section -->
                        <div class="row align-items-center mb-4">
                            <div class="col-5">
                                <img src="{{ asset('foto/' . $data['foto']) }}" 
                                     alt="{{ $data['nama'] }}" 
                                     class="img-fluid rounded shadow"
                                     style="width: 100%; height: auto;">
                            </div>
                            <div class="col-7">
                                <h5 class="fw-bold mb-2 text-{{ $data['color'] }}">{{ $data['nama'] }}</h5>
                                <p class="small mb-1"><strong>Jabatan:</strong> {{ $data['jabatan'] }}</p>
                                <p class="small mb-1"><strong>NIP:</strong> {{ $data['nip'] }}</p>
                                <p class="small mb-1"><strong>Pangkat:</strong> {{ $data['pangkat'] }}</p>
                                <p class="small mb-0"><strong>Pendidikan:</strong> {{ $data['pendidikan'] }}</p>
                            </div>
                        </div>
                        
                        <!-- Score Section -->
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2">Penilaian dengan Skala Likert 4:</h6>
                            <div class="mb-2">
                                <div class="p-2 bg-light rounded">
                                    <strong>Rating Hasil Kerja:</strong> {{ $data['rating_kerja'] }} (Bobot 30%)
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="p-2 bg-light rounded">
                                    <strong>Presensi:</strong> {{ $data['presensi'] }} (Bobot 40%)
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="p-2 bg-light rounded">
                                    <strong>ASN BerAKHLAK:</strong> {{ $data['berakhlak'] }} (Bobot 30%)
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="p-3 bg-{{ $data['color'] }} rounded">
                                    <h5 class="fw-bold mb-0 text-white">Total Nilai: {{ $data['nilai_akhir'] }}/100</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Info Kriteria -->
    <div class="row mt-5 fade-up">
        <div class="col-12">
            <div class="card border-0 bg-light">
                <div class="card-body py-5">
                    <h4 class="fw-bold text-center text-primary mb-4">
                        <i class="fas fa-clipboard-check me-2"></i>Metodologi Penilaian
                    </h4>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card border border-success h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                                    <h5 class="fw-bold">Rating Hasil Kerja</h5>
                                    <h6 class="text-success mb-2">Bobot: 30%</h6>
                                    <p class="small mb-0">
                                        Penilaian kualitas dan kuantitas hasil kerja pegawai
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card border border-primary h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                                    <h5 class="fw-bold">Presensi</h5>
                                    <h6 class="text-primary mb-2">Bobot: 40%</h6>
                                    <p class="small mb-0">
                                        Tingkat kehadiran dan kedisiplinan waktu kerja
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card border border-warning h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-heart fa-3x text-warning mb-3"></i>
                                    <h5 class="fw-bold">ASN BerAKHLAK</h5>
                                    <h6 class="text-warning mb-2">Bobot: 30%</h6>
                                    <p class="small mb-0">
                                        Implementasi nilai-nilai BerAKHLAK dalam perilaku
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <p class="mb-0"><strong>Sistem Penilaian:</strong> Skala Likert 4 (1 = Sangat Tidak Setuju, 4 = Sangat Setuju)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Scroll fade up animation
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

        // Filter functionality
        document.getElementById('filterTahun').addEventListener('change', function() {
            const selected = this.value;
            document.querySelectorAll('.data-tahun').forEach(section => {
                const tahun = section.getAttribute('data-tahun');
                if (selected === 'all' || selected === tahun) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush

@endsection