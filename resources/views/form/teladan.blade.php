@extends('layouts.app')

@section('content')

{{-- Judul --}}
<div class="text-center mb-4">
    <h1 class="fw-bold text-dark">Penilaian Pegawai Teladan</h1>
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

{{-- Deskripsi --}}
<div class="alert alert-info shadow-sm mb-4">
    <p class="mb-0">
        Form ini bertujuan untuk memilih pegawai teladan di lingkungan BPS Kabupaten Tasikmalaya yang diadakan per triwulan secara objektif.
        Penilaian pegawai teladan didasarkan pada: <strong>1) People Budaya Organisasi (PeBO) - NILAI KINERJA, 2) Presensi, 3) Kipapp.</strong>
        <br><br>
        A. <strong>People Budaya Organisasi (PeBO) - NILAI KINERJA</strong><br>
        Pilih nama kandidat dan isilah dengan memilih <strong>KODE</strong> pada pernyataan di bawah ini:<br>
        (1) Sangat Tidak Setuju (STS), (2) Tidak Setuju (TS), (3) Setuju (S), (4) Sangat Setuju (SS).
    </p>
</div>

{{-- Form --}}
<form action="#" method="POST" class="shadow-sm p-4 bg-white rounded">
    @csrf

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

    {{-- Tabel Penilaian --}}
    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-primary align-middle">
                <tr>
                    <th style="width: 50px;">No</th>
                    <th class="text-start">Pernyataan</th>
                    <th>STS<br>(1)</th>
                    <th>TS<br>(2)</th>
                    <th>S<br>(3)</th>
                    <th>SS<br>(4)</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $pernyataan = [
                        'Pegawai memahami dan memenuhi kebutuhan masyarakat',
                        'Pegawai ramah, cekatan, solutif dan dapat diandalkan',
                        'Pegawai melakukan perbaikan tiada henti',
                        'Pegawai melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin dan berintegritas tinggi',
                        'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien',
                        'Pegawai tidak menyalahgunakan kewenangan jabatan',
                        'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah',
                        'Pegawai membantu orang lain belajar',
                        'Pegawai melaksanakan tugas dengan kualitas terbaik',
                        'Pegawai menghargai setiap orang apapun latar belakangnya',
                        'Pegawai suka menolong orang lain',
                        'Pegawai membangun lingkungan kerja yang kondusif',
                        'Pegawai memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah',
                        'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara',
                        'Pegawai menjaga rahasia jabatan dan negara',
                        'Pegawai cepat menyesuaikan diri menghadapi perubahan',
                        'Pegawai terus berinovasi dan mengembangkan kreativitas',
                        'Pegawai bertindak proaktif',
                        'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi',
                        'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah',
                        'Pegawai menggerakkan pemanfaatan berbagai sumberdaya untuk tujuan bersama'
                    ];
                @endphp

                @foreach ($pernyataan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="text-start">{{ $item }}</td>
                    @for ($i = 1; $i <= 4; $i++)
                    <td>
                        <input type="radio" name="pernyataan[{{ $index }}]" value="{{ $i }}" required>
                    </td>
                    @endfor
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Tombol Submit --}}
    <div class="text-end mt-4">
        <button type="submit" class="btn btn-primary shadow-sm px-4">Kirim Penilaian</button>
    </div>
</form>

{{-- Ucapan --}}
<div class="alert alert-success text-center mt-5 shadow-sm">
    <strong>Selamat Kepada Bapak Muhamad Sobari, S.ST., M.STAT.</strong><br>
    Atas Terpilihnya Menjadi Pegawai Teladan BPS Kab. Tasikmalaya TW - I Tahun 2025
</div>

@endsection
