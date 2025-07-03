@extends('layouts.app')

@section('content')
{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

{{-- Bootstrap CSS --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 20px 0;
    }
    
    .main-container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        overflow: hidden;
        margin: 20px auto;
        max-width: 1200px;
    }
    
    .header-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 40px 30px;
        text-align: center;
    }
    
    .header-section h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }
    
    .header-section p {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-bottom: 0;
    }
    
    .content-section {
        padding: 40px 30px;
    }
    
    .form-floating {
        margin-bottom: 25px;
    }
    
    .form-floating > .form-control {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 20px 15px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .form-floating > .form-select {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 20px 15px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .form-floating > .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    
    .form-floating > label {
        font-weight: 500;
        color: #495057;
    }
    
    .alert-custom {
        background: linear-gradient(135deg, #667eea15, #764ba215);
        border: 1px solid #667eea30;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
    }
    
    .form-section {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
    }
    
    .table-container {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .table {
        margin-bottom: 0;
        font-size: 0.95rem;
    }
    
    .table thead th {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        font-weight: 600;
        text-align: center;
        vertical-align: middle;
        border: none;
        padding: 15px 8px;
        font-size: 0.9rem;
    }
    
    .table tbody tr:hover {
        background-color: rgba(102, 126, 234, 0.05);
    }
    
    .table td {
        vertical-align: middle;
        padding: 12px 8px;
        border-color: #e9ecef;
    }
    
    .category-header {
        background: linear-gradient(135deg, #667eea20, #764ba220);
        font-weight: 600;
        color: #495057;
        padding: 15px !important;
    }
    
    .radio-input {
        width: 18px;
        height: 18px;
        accent-color: #667eea;
        cursor: pointer;
    }
    
    .btn-submit {
        background: linear-gradient(135deg, #667eea, #764ba2);
        border: none;
        border-radius: 12px;
        padding: 15px 40px;
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        background: linear-gradient(135deg, #5a67d8, #6b46c1);
    }
    
    .congratulations-card {
        background: linear-gradient(135deg, #48bb78, #38a169);
        color: white;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 10px 20px rgba(72, 187, 120, 0.3);
        margin-top: 30px;
    }
    
    .congratulations-card h4 {
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .scale-legend {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        border-left: 4px solid #667eea;
    }
    
    .scale-legend h6 {
        color: #667eea;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .legend-item {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }
    
    .legend-number {
        background: #667eea;
        color: white;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        margin-right: 12px;
        font-size: 0.9rem;
    }
    
    @media (max-width: 768px) {
        .header-section h1 {
            font-size: 2rem;
        }
        
        .content-section {
            padding: 20px 15px;
        }
        
        .table-container {
            font-size: 0.8rem;
        }
        
        .table thead th {
            padding: 10px 5px;
            font-size: 0.8rem;
        }
        
        .table td {
            padding: 8px 5px;
        }
    }
</style>

<div class="main-container">
    {{-- Header --}}
    <div class="header-section">
        <h1>Penilaian Budaya Organisasi</h1>
        <p>BPS Kabupaten Tasikmalaya</p>
    </div>

    {{-- Content --}}
    <div class="content-section">
        {{-- Form --}}
        <form action="#" method="POST" id="surveyForm">
            @csrf
            
            {{-- Input Data Diri --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                        <label for="nama">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur Anda" min="17" max="65" required>
                        <label for="umur">Umur</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="masa_kerja" name="masa_kerja" placeholder="Masukkan masa kerja dalam tahun" min="0" max="50" required>
                        <label for="masa_kerja">Masa Kerja (Tahun)</label>
                    </div>
                </div>
            </div>

            <div class="form-floating">
                <select class="form-select" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                    <option value="">Pilih Pendidikan Terakhir</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="D3">D3</option>
                    <option value="D4/S1">D4/S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            </div>

            {{-- Deskripsi --}}
            <div class="alert-custom">
                <h5 class="text-primary mb-3">📋 Tentang Survei Ini</h5>
                <p class="mb-3">
                    Survei ini bertujuan untuk melihat gambaran Budaya Organisasi di lingkungan BPS Kabupaten Tasikmalaya.
                    Survei ini mengukur implementasi nilai dasar ASN BerAKHLAK melalui penilaian terhadap perilaku kerja
                    pegawai menggunakan indikator berikut dengan dua aspek penilaian: <strong>Nilai Harapan</strong> dan
                    <strong>Nilai Kinerja</strong>.
                </p>
                <p class="mb-0">
                    Setiap indikator dinilai menggunakan skala Likert 1 – 4.
                </p>
            </div>

            {{-- Keterangan Skala --}}
            <div class="scale-legend">
                <h6>🎯 Keterangan Skala Penilaian</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="legend-item">
                            <div class="legend-number">1</div>
                            <span>Sangat Tidak Setuju / Sangat Rendah</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-number">2</div>
                            <span>Tidak Setuju / Rendah</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="legend-item">
                            <div class="legend-number">3</div>
                            <span>Setuju / Tinggi</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-number">4</div>
                            <span>Sangat Setuju / Sangat Tinggi</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Table --}}
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle text-center">
                        <thead>
                            <tr>
                                <th rowspan="2" style="width: 50px;">No</th>
                                <th rowspan="2" class="text-start" style="min-width: 300px;">Indikator</th>
                                <th colspan="4">Nilai Harapan</th>
                                <th colspan="4">Nilai Kinerja</th>
                            </tr>
                            <tr>
                                <th style="width: 50px;">1</th>
                                <th style="width: 50px;">2</th>
                                <th style="width: 50px;">3</th>
                                <th style="width: 50px;">4</th>
                                <th style="width: 50px;">1</th>
                                <th style="width: 50px;">2</th>
                                <th style="width: 50px;">3</th>
                                <th style="width: 50px;">4</th>
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
                                    'People Budaya Organisasi' => [
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
                                    'System Budaya Organisasi' => [
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
                                $totalNumber = 0;
                            @endphp

                            @foreach ($indikator as $kategori => $pertanyaans)
                                <tr>
                                    <td colspan="10" class="category-header text-start">
                                        <strong>{{ $kategori }}</strong>
                                    </td>
                                </tr>
                                @php $categoryNumber = 1; @endphp
                                @foreach ($pertanyaans as $index => $pertanyaan)
                                    <tr>
                                        <td class="fw-semibold">{{ $categoryNumber }}</td>
                                        <td class="text-start">{{ $pertanyaan }}</td>

                                        {{-- Harapan --}}
                                        @for ($h = 1; $h <= 4; $h++)
                                        <td>
                                            <input type="radio" name="harapan[{{ $kategori }}][{{ $categoryNumber }}]" value="{{ $h }}" class="radio-input" required>
                                        </td>
                                        @endfor

                                        {{-- Kinerja --}}
                                        @for ($k = 1; $k <= 4; $k++)
                                        <td>
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
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-submit">
                    <i class="fas fa-paper-plane me-2"></i>
                    Kirim Penilaian
                </button>
            </div>
        </form>

        {{-- Ucapan Selamat --}}
        <div class="congratulations-card">
            <h4>🎉 Selamat!</h4>
            <p class="mb-0">
                <strong>Bapak Muhamad Sobari, S.ST., M.STAT.</strong><br>
                Atas Terpilihnya Menjadi Pegawai Teladan BPS Kab. Tasikmalaya TW - I Tahun 2025
            </p>
        </div>
    </div>
</div>

{{-- FontAwesome untuk icon --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

{{-- JavaScript untuk validasi form --}}
<script>
document.getElementById('surveyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validasi data diri
    const nama = document.getElementById('nama').value.trim();
    const jenisKelamin = document.getElementById('jenis_kelamin').value;
    const umur = document.getElementById('umur').value;
    const masaKerja = document.getElementById('masa_kerja').value;
    const pendidikanTerakhir = document.getElementById('pendidikan_terakhir').value;
    
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