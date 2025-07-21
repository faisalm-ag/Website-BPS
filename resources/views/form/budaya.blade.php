@extends('layouts.app')

@section('content')
{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="container py-5">
    <div class="card shadow-lg border-0">
        <div class="card-body">
            {{-- Header --}}
            <div class="text-center mb-4">
                <h1 class="fw-bold text-primary" style="font-family: 'Poppins', sans-serif;">Penilaian Budaya Organisasi</h1>
                <p class="text-muted" style="font-family: 'Poppins', sans-serif;">BPS Kabupaten Tasikmalaya</p>
            </div>

            {{-- Form --}}
            <form action="#" method="POST" id="surveyForm">
                @csrf

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

                {{-- Deskripsi --}}
                <div class="alert alert-info border-start border-4 border-primary shadow-sm">
                    <h5 class="fw-bold"><i class="fas fa-info-circle me-2 text-primary"></i>Tentang Survei Ini</h5>
                    <p class="mb-1">
                        Survei ini bertujuan untuk melihat gambaran Budaya Organisasi di lingkungan BPS Kabupaten Tasikmalaya.
                        Survei ini mengukur implementasi nilai dasar ASN BerAKHLAK melalui penilaian terhadap perilaku kerja pegawai
                        menggunakan indikator berikut dengan dua aspek penilaian: <strong>Nilai Harapan</strong> dan <strong>Nilai Kinerja</strong>.
                    </p>
                    <p class="mb-0">Setiap indikator dinilai menggunakan skala Likert 1 – 4.</p>
                </div>

                {{-- Skala --}}
                <div class="bg-light p-3 rounded mb-4 border">
                    <h6 class="fw-bold mb-3"><i class="fas fa-scale-balanced me-2 text-secondary"></i>Keterangan Skala Penilaian</h6>
                    <div class="row text-center">
                        <div class="col-md-3"><span class="badge bg-danger rounded-pill px-3 py-2">1</span><br><small>Sangat Tidak Setuju / Sangat Rendah</small></div>
                        <div class="col-md-3"><span class="badge bg-warning rounded-pill px-3 py-2">2</span><br><small>Tidak Setuju / Rendah</small></div>
                        <div class="col-md-3"><span class="badge bg-info rounded-pill px-3 py-2">3</span><br><small>Setuju / Tinggi</small></div>
                        <div class="col-md-3"><span class="badge bg-success rounded-pill px-3 py-2">4</span><br><small>Sangat Setuju / Sangat Tinggi</small></div>
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
                                    <th colspan="4" class="border-start">Nilai Kinerja</th>
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
                                                <td @if ($k == 1) class="border-start" @endif>
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
                    <button type="submit" class="btn btn-primary px-4 py-2">
                        <i class="fas fa-paper-plane me-2"></i> Kirim Penilaian
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
<style>
body {
    font-family: 'Poppins', sans-serif;
}
.card {
    border-radius: 1rem;
}
label.form-label {
    font-weight: 500;
}
.form-select, .form-control {
    border-radius: 0.5rem;
}
.alert-info {
    font-size: 0.95rem;
}
.table-container table {
    border-collapse: collapse;
}
.table thead th {
    background-color: #f8f9fa;
    vertical-align: middle;
}
.table tbody td {
    vertical-align: middle;
}
.table input[type="radio"] {
    transform: scale(1.1);
    cursor: pointer;
}
.category-header {
    background-color: #f1f1f1;
    font-weight: 600;
}
.table th.border-start,
.table td.border-start {
    border-left: 3px solid #000 !important;
}
.table tbody tr:hover {
    background-color: #fdfdfd;
}
.table th, .table td {
    vertical-align: middle;
}
.radio-input {
    transform: scale(1.1);
    cursor: pointer;
}
</style>
@endpush

{{-- FontAwesome untuk icon --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

{{-- JavaScript untuk validasi form --}}
<script>
document.getElementById('surveyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validasi data diri (SUDAH DIPERBAIKI)
    const nama = document.querySelector('select[name="kandidat"]').value;
    const jenisKelamin = document.querySelector('select[name="jenis_kelamin"]').value;
    const umur = document.querySelector('input[name="umur"]').value;
    const masaKerja = document.querySelector('input[name="masa_kerja"]').value;
    const pendidikanTerakhir = document.querySelector('select[name="pendidikan_terakhir"]').value;
    
    if (!nama || !jenisKelamin || !umur || !masaKerja || !pendidikanTerakhir) {
        alert('Mohon lengkapi semua data diri terlebih dahulu.');
        return;
    }
    
    // Validasi radio buttons (SUDAH DIPERBAIKI)
    const radioGroups = document.querySelectorAll('input[type="radio"]');
    const groupNames = [...new Set(Array.from(radioGroups).map(r => r.name))];
    
    let allFilled = true;
    for (let groupName of groupNames) {
        // Menggunakan backtick (`) untuk template literal
        const groupRadios = document.querySelectorAll(input[name="${groupName}"]);
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