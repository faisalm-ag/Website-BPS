@extends('layouts.app')

@section('content')
{{-- Judul --}}
<div class="text-center mb-4">
    <h1 class="fw-bold text-dark">Penilaian Budaya Organisasi</h1>
    <p class="text-secondary fs-5">BPS Kabupaten Tasikmalaya</p>
</div>

{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

{{-- Bootstrap CSS --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }
    .navbar-brand img {
        height: 36px;
    }
</style>

    {{-- Pilih Kandidat --}}
    <div class="mb-4">
        <label for="kandidat" class="form-label fw-semibold">Pilih Nama Kandidat</label>
        <select class="form-select" name="kandidat" id="kandidat" required>
            <option value="" disabled selected>-- Pilih Kandidat --</option>
            <option value="Sobari">Angga Parlindungan</option>
            <option value="Kandidat Lain">Gofiky Parlindungan</option>
            <option value="Kandidat Lain">Asep</option>
            <option value="Kandidat Lain">Prabu wijaya</option>
            <option value="Kandidat Lain">Solihin</option>
            <option value="Kandidat Lain">Dobre ST.H</option>
            {{-- Tambahkan nama kandidat lain di sini --}}
        </select>
    </div>

{{-- Deskripsi --}}
<div class="alert alert-info shadow-sm mb-4">
    <p class="mb-0">
        Survei ini bertujuan untuk melihat gambaran Budaya Organisasi di lingkungan BPS Kabupaten Tasikmalaya.
        Survei ini mengukur implementasi nilai dasar ASN BerAKHLAK melalui penilaian terhadap perilaku kerja
        pegawai menggunakan indikator berikut dengan dua aspek penilaian : <strong>Nilai Harapan</strong> dan
        <strong>Nilai Kinerja</strong>. Setiap indikator dinilai menggunakan skala Likert 1 – 4.
    </p>
</div>

{{-- Form --}}
<form action="#" method="POST" class="shadow-sm p-4 bg-white rounded">
    @csrf

    {{-- Table --}}
{{-- Table --}}
<div class="table-responsive">
    <table class="table table-striped table-bordered align-middle text-center">
        <thead class="table-primary align-middle">
            <tr>
                <th rowspan="2" style="width: 50px;">No</th>
                <th rowspan="2" class="text-start">Indikator</th>
                <th colspan="4">Nilai Harapan</th>
                <th colspan="4">Nilai Kinerja</th>
            </tr>
            <tr>
                <th>1</th><th>2</th><th>3</th><th>4</th>
                <th>1</th><th>2</th><th>3</th><th>4</th>
            </tr>
        </thead>
        <tbody>
            @php
                $indikator = [
                    'Prilaku Kerja Organisasi' => [
                        'Berorientasi pelayanan, yaitu memahami dan memenuhi kebutuhan masyarakat, ramah, cekatan, solutif, dapat diandalkan, dan melakukan perbaikan tiada henti.',
                        'Akuntabel, yaitu melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin berintegritas tinggi, menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, efisien, dan tidak menyalahgunakan kewenangan jabatan.',
                        'Kompeten, yaitu meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah, membantu orang lain belajar, dan melaksanakan tugas dengan kualitas terbaik.',
                        'Harmonis, yaitu menghargai setiap orang apapun latar belakangnya, suka menolong orang lain, dan membangun lingkungan kerja yang kondusif.',
                        'Loyal, yaitu memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah, menjaga nama baik sesama ASN, pimpinan, instansi, dan negara, serta menjaga rahasia jabatan dan negara.',
                        'Adaptif, yaitu cepat menyesuaikan diri menghadapi perubahan, terus berinovasi dan mengembangkan kreativitas, dan bertindak proaktif.',
                        'Kolaboratif, yaitu memberi kesempatan kepada berbagai pihak untuk berkontribusi, terbuka dalam bekerja sama untuk menghasilkan nilai tambah, dan menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.',
                    ],
                    'Leadership Budaya Organisasi' => [
                        'Pegawai menerima masukan secara rutin dari pimpinan mengenai implementasi nilai BerAKHLAK dalam pelaksanaan tugas sehari-hari.',
                        'Pimpinan memberikan contoh yang baik dalam implementasi nilai-nilai BerAKHLAK.',
                        'Pimpinan memberikan pujian ketika salah seorang bawahan memberikan pelayanan terbaik kepada stakeholder (internal dan eksternal) sesuai dengan nilai BerAKHLAK.',
                        'Pimpinan melakukan program coaching yang efektif untuk membantu pegawai mengembangkan kompetensi mereka. (Note: Coaching adalah teknik atau proses yang dilakukan untuk membuka potensi seseorang dalam rangka mengoptimalkan kinerja dan pengembangan dirinya dengan cara memberikan tools, pengetahuan, dan kesempatan yang dibutuhkan).',
                        'Pimpinan bukan hanya berbicara, tetapi mengambil tindakan yang nyata untuk meningkatkan nilai BerAKHLAK sebagai budaya organisasi.',
                        'Pimpinan menekankan secara berulang-ulang tentang pentingnya BerAKHLAK diimplementasikan dalam pekerjaan sehari-hari.',
                        'Pimpinan melaksanakan program mentoring yang efektif untuk membantu pegawai mengembangkan kompetensi. (note: Mentoring adalah proses membimbing/melatih yang dilakukan oleh orang yang ahli di bidang tertentu terhadap pegawai yang membutuhkan peningkatan kompetensi di bidang tersebut).',
                        'Pimpinan mendorong semua anak buahnya untuk selalu memberikan layanan yang terbaik.',
                    ],
                    'People Budaya Organisasi' => [
                        'Pegawai memahami dan memenuhi kebutuhan masyarakat.',
                        'Pegawai ramah, cekatan, solutif dan dapat diandalkan.',
                        'Pegawai melakukan perbaikan tiada henti.',
                        'Pegawai melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin dan berintegritas tinggi.',
                        'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien.',
                        'Pegawai tidak menyalahgunakan kewenangan jabatan,',
                        'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah.',
                        'Pegawai membantu orang lain belajar.',
                        'Pegawai melaksanakan tugas dengan kualitas terbaik.',
                        'Pegawai menghargai setiap orang apapun latar belakangnya.',
                        'Pegawai suka menolong orang lain.',
                        'Pegawai membangun lingkungan kerja yang kondusif.',
                        'Pegawai memegang teguh ideologi Pancasila,Undang-Undang Dasar Negara Republik Indonesia tahun 1945, setia kepada Negara Kesatuan Republik Indonesia serta pemerintahan yang sah.',
                        'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara.',
                        'Pegawai menjaga rahasia jabatan dan negara.',
                        'Pegawai cepat menyesuaikan diri menghadapi perubahan.',
                        'Pegawai terus berinovasi dan mengembangkan kreativitas.',
                        'Pegawai bertindak proaktif.',
                        'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi.',
                        'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah.',
                        'Pegawai menggerakkan pemanfaatan berbagai sumberdaya untuk tujuan bersama.',
                    ],
                    'System Budaya Organisasi' => [
                        'BPS Kabupaten Tasikmalaya memberikan sanksi terhadap pegawai yang melakukan tindakan yang tidak sesuai dengan BerAKHLAK.',
                        'PS Kabupaten Tasikmalaya memiliki standar yang jelas dalam mengimplementasikan BerAKHLAK.',
                        'BPS Kabupaten Tasikmalaya memberikan penghargaan kepada pegawai yang menunjukkan nilai BerAKHLAK yang sangat baik.',
                        'BPS Kabupaten Tasikmalaya telah memiliki media (email, telepon, sms, whatsapp, dll) untuk menampung keluhan dari stakeholder (eksternal dan internal).',
                        'BPS Kabupaten Tasikmalaya telah memiliki sarana bagi pegawainya untuk dapat secara aktif menyuarakan pendapat mereka dalam upaya untuk meningkatkan nilai BerAKHLAK menjadi budaya organisasi.',
                        'BPS Kabupaten Tasikmalaya memiliki sejumlah inisiatif atau program untuk meningkatkan BerAKHLAK menjadi budaya organisasi.',
                        'BPS Kabupaten Tasikmalaya telah melaksanakan/ mengimplementasikan inisiatif atau program untuk meningkatkan BerAKHLAK menjadi budaya dalam pekerjaan sehari-hari.',
                        'Pegawai yang menunjukkan kualitas pelayanan yang luar biasa diberi prioritas kesempatan untuk meningkatkan kompetensinya.',
                        'Terdapat jalur/media komunikasi untuk mensosialisasikan BerAKHLAK dan budaya pelayanan kepada semua pegawai BPS secara rutin (misalnya melalui Community, Varia Statistik, email, whatsapp group, dll).',
                        'Inisiatif atau program peningkatan nilai BerAKHLAK dilakukan dengan mendengarkan saran/masukan dari stakeholder (internal dan eksternal).',
                        'Penghargaan yang berkaitan dengan implementasi nilai BerAKHLAK dalam meningkatkan kualitas pelayanan diberikan secara adil dan transparan.',
                    ],
                ];
                $counter = 0;
            @endphp

            @foreach ($indikator as $kategori => $pertanyaans)
                <tr class="table-light">
                    <td colspan="9" class="text-start fw-semibold">{{ $kategori }}</td>
                </tr>
                @php $number = 1; @endphp
                @foreach ($pertanyaans as $pertanyaan)
                <tr>
                    <td>{{ $number++ }}</td>
                    <td class="text-start">{{ $pertanyaan }}</td>

                    {{-- Harapan --}}
                    @for ($h = 1; $h <= 4; $h++)
                    <td>
                        <input type="radio" name="harapan[{{ $kategori }}][{{ $number }}]" value="{{ $h }}" required>
                    </td>
                    @endfor

                    {{-- Kinerja --}}
                    @for ($k = 1; $k <= 4; $k++)
                    <td>
                        <input type="radio" name="kinerja[{{ $kategori }}][{{ $number }}]" value="{{ $k }}" required>
                    </td>
                    @endfor
                </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>

{{-- Tombol Kirim --}}
<div class="text-end mt-4">
    <button type="submit" class="btn btn-primary px-4 shadow-sm">Kirim Penilaian</button>
</div>

</form>
{{-- Ucapan --}}
<div class="alert alert-success text-center mt-5 shadow-sm">
    <strong>Selamat Kepada Bapak Muhamad Sobari, S.ST., M.STAT.</strong><br>
    Atas Terpilihnya Menjadi Pegawai Teladan BPS Kab. Tasikmalaya TW - I Tahun 2025
</div>

@endsection
