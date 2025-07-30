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
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="mb-1 justify">
                                Survei ini bertujuan untuk melihat gambaran Budaya Organisasi di lingkungan BPS Kabupaten Tasikmalaya.
                                Survei ini mengukur implementasi nilai dasar ASN BerAKHLAK melalui penilaian terhadap perilaku kerja pegawai
                                menggunakan indikator berikut dengan dua aspek penilaian: Nilai Harapan dan Nilai Kinerja.
                            </p>
                            <div class="alert alert-light border-start border-4 border-primary">
                                <h6 class="fw-bold text-primary mb-2">Indikator Penilaian:</h6>
                                <ul class="mb-0">
                                    <li><strong>Indikator Perilaku Kerja Pegawai </strong>- (PriKer)</li>
                                    <li><strong>Indikator Leadership Budaya Organisasi </strong> - (LeadBO)</li>
                                    <li><strong>Indikator People Budaya Organisasi </strong> - (PeBO)</li>
                                    <li><strong>Indikator System Budaya Organisasi </strong> - (SysBO)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card bg-light border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-chart-pie fa-3x text-primary mb-3"></i>
                                    <h6 class="fw-bold">Skala Penilaian</h6>
                                    <div class="row text-center mt-3">
                                        <div class="col-6 mb-2">
                                            <span class="badge bg-danger" style="color: white !important;">1 - STS</span>
                                            <small class="d-block">Sangat Tidak Setuju</small>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <span class="badge bg-warning" style="color: white !important;">2 - TS</span>
                                            <small class="d-block">Tidak Setuju</small>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <span class="badge bg-info" style="color: white !important;">3 - S</span>
                                            <small class="d-block">Setuju</small>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <span class="badge bg-success" style="color: white !important;">4 - SS</span>
                                            <small class="d-block">Sangat Setuju</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card shadow-lg border-0">
        <div class="card-body">    

            {{-- Form --}}
            <form action="#" method="POST" id="surveyForm">
                @csrf
                {{-- Main Form Header --}}
                <div class="card-header bg-primary text-white py-3 mb-4 rounded-3">
                    <h5 class="mb-0 fw-bold">
                        <i class="fas fa-edit me-2"></i>Form Penilaian Budaya Organisasi
                    </h5>
                </div>
                {{-- Input Data Diri --}}
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">👤 Pilih Nama Anda</label>
                        <select class="form-select form-select-lg" name="kandidat" required>
                            <option value="" disabled selected>-- Nama Lengkap --</option>
                            <option value="Angga Parlindungan">Angga Parlindungan</option>
                            <option value="Gofiky Parlindungan">Gofiky Parlindungan</option>
                            <option value="Asep">Asep</option>
                            <option value="Prabu Wijaya">Prabu Wijaya</option>
                            <option value="Solihin">Solihin</option>
                            <option value="Dobre ST.H">Dobre ST.H</option>
                            <option value="Muhamad Sobari, S.ST., M.STAT.">Muhamad Sobari, S.ST., M.STAT.</option>
                            <option value="Iis Irmawati, A. Md.">Iis Irmawati, A. Md.</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold"> Jenis Kelamin</label>
                        <select class="form-select form-select-lg" name="jenis_kelamin" required>
                            <option value="" disabled selected>-- Pilih Jenis kelamin anda --</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold"> Umur</label>
                        <input type="number" name="umur" class="form-control" min="17" max="65" placeholder="Contoh: 30" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">📆 Masa Kerja (Tahun)</label>
                        <input type="number" name="masa_kerja" class="form-control" min="0" max="40" placeholder="Contoh: 5" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">🎓 Pendidikan Terakhir</label>
                        <select class="form-select form-select-lg" name="pendidikan_terakhir" required>
                            <option value="" disabled selected>-- Pilih Pendidikan Terakhir anda --</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>

                {{-- Table --}}
                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle text-center outer-border-bold">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="width: 50px;" class="fw-bold">No</th>
                                    <th rowspan="2" class="text-start border-bold" style="min-width: 300px;">Indikator</th>
                                    <th colspan="4" class="border-bold">Nilai Harapan</th>
                                    <th colspan="4" class="border-bold">Nilai Kinerja</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th class="border-left-bold">1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $indikator = [
                                        'Perilaku Kerja Pegawai (PriKer)' => [
                                            'Berorientasi pelayanan, yaitu memahami dan memenuhi kebutuhan masyarakat, ramah, cekatan, solutif, dapat diandalkan, dan melakukan perbaikan tiada henti.',
                                            'Akuntabel, yaitu melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin berintegritas tinggi, menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, efisien, dan tidak menyalahgunakan kewenangan jabatan.',
                                            'Kompeten, yaitu meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah, membantu orang lain belajar, dan melaksanakan tugas dengan kualitas terbaik.',
                                            'Harmonis, yaitu menghargai setiap orang apapun latar belakangnya, suka menolong orang lain, dan membangun lingkungan kerja yang kondusif.',
                                            'Loyal, yaitu memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah, menjaga nama baik sesama ASN, pimpinan, instansi, dan negara, serta menjaga rahasia jabatan dan negara.',
                                            'Adaptif, yaitu cepat menyesuaikan diri menghadapi perubahan, terus berinovasi dan mengembangkan kreativitas, dan bertindak proaktif.',
                                            'Kolaboratif, yaitu memberi kesempatan kepada berbagai pihak untuk berkontribusi, terbuka dalam bekerja sama untuk menghasilkan nilai tambah, dan menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.',
                                        ],
                                        'Leadership Budaya Organisasi (LeadBO)' => [
                                            'Pegawai menerima masukan secara rutin dari pimpinan mengenai implementasi nilai BerAKHLAK dalam pelaksanaan tugas sehari-hari.',
                                            'Pimpinan memberikan contoh yang baik dalam implementasi nilai-nilai BerAKHLAK.',
                                            'Pimpinan memberikan pujian ketika salah seorang bawahan memberikan pelayanan terbaik kepada stakeholder (internal dan eksternal) sesuai dengan nilai BerAKHLAK.',
                                            'Pimpinan melakukan program coaching yang efektif untuk membantu pegawai mengembangkan kompetensi mereka.',
                                            'Pimpinan bukan hanya berbicara, tetapi mengambil tindakan yang nyata untuk meningkatkan nilai BerAKHLAK sebagai budaya organisasi.',
                                            'Pimpinan menekankan secara berulang-ulang tentang pentingnya BerAKHLAK diimplementasikan dalam pekerjaan sehari-hari.',
                                            'Pimpinan melaksanakan program mentoring yang efektif untuk membantu pegawai mengembangkan kompetensi.',
                                            'Pimpinan mendorong semua anak buahnya untuk selalu memberikan layanan yang terbaik.',
                                        ],
                                        'People Budaya Organisasi (PeBO)' => [
                                            'Pegawai memahami dan memenuhi kebutuhan masyarakat.',
                                            'Pegawai ramah, cekatan, solutif dan dapat diandalkan.',
                                            'Pegawai melakukan perbaikan tiada henti.',
                                            'Pegawai melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin dan berintegritas tinggi.',
                                            'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien.',
                                            'Pegawai tidak menyalahgunakan kewenangan jabatan.',
                                            'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah.',
                                            'Pegawai membantu orang lain belajar.',
                                            'Pegawai melaksanakan tugas dengan kualitas terbaik.',
                                            'Pegawai menghargai setiap orang apapun latar belakangnya.',
                                            'Pegawai suka menolong orang lain.',
                                            'Pegawai membangun lingkungan kerja yang kondusif.',
                                            'Pegawai memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah.',
                                            'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara.',
                                            'Pegawai menjaga rahasia jabatan dan negara.',
                                            'Pegawai cepat menyesuaikan diri menghadapi perubahan.',
                                            'Pegawai terus berinovasi dan mengembangkan kreativitas.',
                                            'Pegawai bertindak proaktif.',
                                            'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi.',
                                            'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah.',
                                            'Pegawai menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.',
                                        ],
                                        'System Budaya Organisasi (SysBO)' => [
                                            'BPS Kabupaten Tasikmalaya memberikan sanksi terhadap pegawai yang melakukan tindakan yang tidak sesuai dengan BerAKHLAK.',
                                            'BPS Kabupaten Tasikmalaya memiliki standar yang jelas dalam mengimplementasikan BerAKHLAK.',
                                            'BPS Kabupaten Tasikmalaya memberikan penghargaan kepada pegawai yang menunjukkan nilai BerAKHLAK yang sangat baik.',
                                            'BPS Kabupaten Tasikmalaya telah memiliki media untuk menampung keluhan dari stakeholder (eksternal dan internal).',
                                            'BPS Kabupaten Tasikmalaya telah memiliki sarana bagi pegawainya untuk dapat secara aktif menyuarakan pendapat mereka dalam upaya untuk meningkatkan nilai BerAKHLAK.',
                                            'BPS Kabupaten Tasikmalaya memiliki sejumlah inisiatif atau program untuk meningkatkan BerAKHLAK menjadi budaya organisasi.',
                                            'BPS Kabupaten Tasikmalaya telah mengimplementasikan inisiatif atau program untuk meningkatkan BerAKHLAK dalam pekerjaan sehari-hari.',
                                            'Pegawai yang menunjukkan kualitas pelayanan yang luar biasa diberi prioritas kesempatan untuk meningkatkan kompetensinya.',
                                            'Terdapat jalur komunikasi untuk mensosialisasikan BerAKHLAK dan budaya pelayanan kepada semua pegawai BPS secara rutin.',
                                            'Inisiatif atau program peningkatan nilai BerAKHLAK dilakukan dengan mendengarkan saran dari stakeholder (internal dan eksternal).',
                                            'Penghargaan yang berkaitan dengan implementasi nilai BerAKHLAK dalam meningkatkan kualitas pelayanan diberikan secara adil dan transparan.',
                                        ],
                                    ];
                                @endphp

                                @foreach ($indikator as $kategori => $pertanyaans)
                                    <tr>
                                        <td colspan="10" class="category-header text-center align-middle border-bold">
                                            <strong>{{ $kategori }}</strong>
                                        </td>
                                    </tr>
                                    @php $categoryNumber = 1; @endphp
                                    @foreach ($pertanyaans as $index => $pertanyaan)
                                        <tr>
                                            <td class="fw-bold">{{ $categoryNumber }}</td>
                                            <td class="text-start">{{ $pertanyaan }}</td>

                                            {{-- Harapan --}}
                                            @for ($h = 1; $h <= 4; $h++)
                                            <td @if($h == 1) class="border-left-bold" @endif>
                                                <input type="radio" name="harapan[{{ $kategori }}][{{ $categoryNumber }}]" value="{{ $h }}" class="radio-input" required>
                                            </td>
                                            @endfor

                                            {{-- Kinerja --}}
                                            @for ($k = 1; $k <= 4; $k++)
                                            <td @if($k == 1) class="border-left-bold" @endif>
                                                <input type="radio" name="kinerja[{{ $kategori }}][{{ $categoryNumber }}]" value="{{ $k }}" class="radio-input" required>
                                            </td>
                                            @endfor
                                        </tr>
                                        @php $categoryNumber++; @endphp
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Tombol Kirim --}}
                <div class="text-center mt-4 mb-5">
                    <button type="submit" class="btn btn-primary px-4 py-2 text-white fw-bold">
                        <i class="fas fa-paper-plane me-2"></i> Kirim Penilaian
                    </button>
                </div>
            </form>
        </div>
    </div>
    {{-- Footer Info --}}
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 bg-light">
                <div class="card-body text-center">
                    <h6 class="text-muted mb-3">Sistem Penilaian Budaya Organisasi</h6>
                    <p class="text-muted small mb-0">
                        <i class="fas fa-building me-1"></i>BPS Kabupaten Tasikmalaya | 
                        <i class="fas fa-calendar me-1"></i>{{ date('Y') }} | 
                        <i class="fas fa-shield-alt me-1"></i>Data Terlindungi
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    /* Style umum */
    body {
        font-family: 'Poppins', sans-serif;
    }
    .card {
        border-radius: 1rem;
    }
    .form-select, .form-control {
        border-radius: 0.5rem;
    }

    /* STYLING TABEL BARU */

    /* Warna dasar untuk header dan hover */
    :root {
        --tbl-header-bg: #f8f9fa;
        --tbl-hover-bg: #f5f9ff;
        --tbl-dark-border: #343a40;
        --tbl-light-border: #dee2e6;
    }

    /* Mengatur border utama tabel */
    .table-bordered {
        border: 2px solid var(--tbl-dark-border) !important;
    }

    /* Semua sel di dalam tabel */
    .table-bordered th,
    .table-bordered td {
        border: 1px solid var(--tbl-light-border); /* Garis internal tipis sebagai default */
        vertical-align: middle;
    }

    /* Header Tabel */
    .table-bordered thead th {
        background-color: var(--tbl-header-bg);
        border-bottom: 2px solid var(--tbl-dark-border); /* Garis bawah header tebal */
    }

    /* Menggunakan class yang sudah ada di HTML Anda */
    .table-bordered .border-bold {
        border-width: 2px !important;
        border-color: var(--tbl-dark-border) !important;
    }
    .table-bordered .border-left-bold {
        border-left: 2px solid var(--tbl-dark-border) !important;
    }
    
    /* Header Kategori (PriKer, dll.) */
    .category-header {
        background-color: #e9ecef;
        font-weight: 600;
        text-align: left;
    }

    /* Efek hover */
    .table-bordered tbody tr:not(:has(.category-header)):hover {
        background-color: var(--tbl-hover-bg);
    }

    /* Radio button */
    .radio-input {
        transform: scale(1.4);
        cursor: pointer;
        accent-color: #0d6efd;
    }

    /* GANTI KODE SEBELUMNYA DENGAN INI */

    /* Menambahkan garis vertikal tipis setelah kolom "No" */
    .table-bordered th:first-child,
    .table-bordered td:first-child {
        border-right: 1px solid var(--tbl-light-border) !important;
    }

    /* Memastikan kolom "Indikator" tetap punya border tebal di kirinya */

    .table-bordered td:nth-child(2) {
        border-left: 2px solid var(--tbl-dark-border) !important;
    }

        /* TAMBAHAN: Menghapus border ganda */
    .table-bordered th:nth-child(6),
    .table-bordered td:nth-child(6) {
        border-right: none !important;
    }
    .btn-primary.text-white {
        color: white !important;
    }

    #form-title {
        color: #0d6efd !important; /* Ganti kode warna #0d6efd dengan warna biru yang Anda inginkan */
    }
</style>
@endpush

{{-- FontAwesome untuk icon --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

{{-- JavaScript untuk validasi form --}}
<script>
document.getElementById('surveyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validasi data diri
    const nama = document.querySelector('select[name="kandidat"]').value;
    const jenisKelamin = document.querySelector('select[name="jenis_kelamin"]').value;
    const umur = document.querySelector('input[name="umur"]').value;
    const masaKerja = document.querySelector('input[name="masa_kerja"]').value;
    const pendidikanTerakhir = document.querySelector('select[name="pendidikan_terakhir"]').value;
    
    if (!nama || !jenisKelamin || !umur || !masaKerja || !pendidikanTerakhir) {
        alert('Mohon lengkapi semua data diri terlebih dahulu.');
        return;
    }
    
    // Validasi radio buttons
    const radioGroups = document.querySelectorAll('input[type="radio"]');
    const groupNames = [...new Set(Array.from(radioGroups).map(r => r.name))];
    
    let allFilled = true;
    for (let groupName of groupNames) {
        const groupRadios = document.querySelectorAll(`input[name="${groupName}"]`);
        const isChecked = Array.from(groupRadios).some(radio => radio.checked);
        if (!isChecked) {
            allFilled = false;
            break;
        }
    }
    
    if (!allFilled) {
        alert('Mohon lengkapi semua penilaian sebelum mengirim.');
        return;
    }
    
    // Jika semua validasi berhasil
    alert('Terima kasih! Penilaian Anda telah berhasil dikirim.');
    
    // Di sini Anda bisa menambahkan kode untuk mengirim data ke server
    // this.submit();
});
</script>

@endsection