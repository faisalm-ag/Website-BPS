@extends('layouts.app')

@section('content')

{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<div class="container-fluid px-3">
    
  {{-- Header Teladan --}}
<div class="container py-5">
    <div class="text-center mb-4">
        <div class="mb-3">
            <i class="fas fa-trophy fa-2x text-warning"></i>
        </div>
        <h2 class="fw-bold text-primary mb-2">Penilaian Pegawai Teladan</h2>
        <p class="text-muted fs-5 mb-1">Sistem Evaluasi Kinerja & Budaya Organisasi</p>
        <p class="text-muted fs-5 mb-3">BPS Kabupaten Tasikmalaya</p>
    </div>
</div>


    {{-- Description Section --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="mb-0 fw-bold">
                        <i class="fas fa-info-circle me-2"></i>Informasi Penilaian
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="text-dark mb-3">
                                Form ini bertujuan untuk memilih pegawai teladan di lingkungan BPS Kabupaten Tasikmalaya yang diadakan per triwulan secara objektif dan transparan.
                            </p>
                            <div class="alert alert-light border-start border-4 border-primary">
                                <h6 class="fw-bold text-primary mb-2">Kriteria Penilaian:</h6>
                                <ul class="mb-0">
                                    <li><strong>People Budaya Organisasi (PeBO)</strong> - Nilai Kinerja</li>
                                    <li><strong>Presensi</strong> - Kehadiran dan Kedisiplinan</li>
                                    <li><strong>Kipapp</strong> - Kinerja Aplikasi</li>
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
                                            <span class="badge bg-danger">1 - STS</span>
                                            <small class="d-block">Sangat Tidak Setuju</small>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <span class="badge bg-warning">2 - TS</span>
                                            <small class="d-block">Tidak Setuju</small>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <span class="badge bg-info">3 - S</span>
                                            <small class="d-block">Setuju</small>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <span class="badge bg-success">4 - SS</span>
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

    {{-- Main Form --}}
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-gradient-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-edit me-2"></i>Form Penilaian Pegawai Teladan</h4>
                </div>
                <div class="card-body p-4">
                    <form action="#" method="POST" id="penilaianForm">
                        @csrf

                         {{-- Input Data Diri --}}
                        <div class="row mb-4">
                            <div class="col-12">
                                <label for="kandidat" class="form-label fw-semibold fs-5">Pilih Nama Anda</label>
                                <select class="form-select form-select-lg" name="kandidat" id="kandidat" required>
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
                        <div class="row mb-4">
                            <div class="col-12">
                                <label for="jenis_kelamin" class="form-label fw-semibold fs-5">
                                    <i></i>Jenis Kelamin
                                </label>
                                <select class="form-select form-select-lg" name="jenis_kelamin" id="jenis_kelamin" required>
                                    <option value="" disabled selected>-- Pilih Jenis kelamin anda --</option>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
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
                        <input type="number" class="form-control" id="masa_kerja" name="masa_kerja" placeholder="Masukkan masa kerja dalam tahun" min="0" max="110" required>
                        <label for="masa_kerja">Masa Kerja (Tahun)</label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <label for="pendidikan_terakhir" class="form-label fw-semibold fs-5">
                        <i></i>Pendidikan Terakhir
                            </label>
                        <select class="form-select form-select-lg" name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                    <option value="" disabled selected>-- Pilih Pendidikan Terakhir anda --</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="D3">D3</option>
                    <option value="D4/S1">D4/S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
        </div>

                        {{-- Pilih Kandidat --}}
                        <div class="row mb-4">
                            <div class="col-12">
                                <label for="kandidat" class="form-label fw-semibold fs-5">
                                    <i class="fas fa-user-check me-2 text-primary"></i>Pilih Nama Kandidat yang Dinilai
                                </label>
                                <select class="form-select form-select-lg" name="kandidat" id="kandidat" required>
                                    <option value="" disabled selected>-- Pilih Kandidat --</option>
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

                        {{-- Progress Bar --}}
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-semibold">Progress Penilaian:</span>
                                <span id="progressText">0/21 (0%)</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" id="progressBar" style="width: 0%"></div>
                            </div>
                        </div>

                        {{-- Tabel Penilaian --}}
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead class="table-primary text-center">
                                    <tr>
                                        <th style="width: 60px;" class="fw-bold">No</th>
                                        <th class="text-start fw-bold">Aspek Penilaian</th>
                                        <th style="width: 80px;" class="fw-bold">
                                            <div class="text-danger">STS</div>
                                            <small>(1)</small>
                                        </th>
                                        <th style="width: 80px;" class="fw-bold">
                                            <div class="text-warning">TS</div>
                                            <small>(2)</small>
                                        </th>
                                        <th style="width: 80px;" class="fw-bold">
                                            <div class="text-info">S</div>
                                            <small>(3)</small>
                                        </th>
                                        <th style="width: 80px;" class="fw-bold">
                                            <div class="text-success">SS</div>
                                            <small>(4)</small>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $pernyataan = [
                                            ['kategori' => 'Pelayanan Prima', 'item' => 'Pegawai memahami dan memenuhi kebutuhan masyarakat'],
                                            ['kategori' => 'Pelayanan Prima', 'item' => 'Pegawai ramah, cekatan, solutif dan dapat diandalkan'],
                                            ['kategori' => 'Pelayanan Prima', 'item' => 'Pegawai melakukan perbaikan tiada henti'],
                                            ['kategori' => 'Integritas', 'item' => 'Pegawai melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin dan berintegritas tinggi'],
                                            ['kategori' => 'Integritas', 'item' => 'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien'],
                                            ['kategori' => 'Integritas', 'item' => 'Pegawai tidak menyalahgunakan kewenangan jabatan'],
                                            ['kategori' => 'Pembelajaran Berkelanjutan', 'item' => 'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah'],
                                            ['kategori' => 'Pembelajaran Berkelanjutan', 'item' => 'Pegawai membantu orang lain belajar'],
                                            ['kategori' => 'Pembelajaran Berkelanjutan', 'item' => 'Pegawai melaksanakan tugas dengan kualitas terbaik'],
                                            ['kategori' => 'Harmoni', 'item' => 'Pegawai menghargai setiap orang apapun latar belakangnya'],
                                            ['kategori' => 'Harmoni', 'item' => 'Pegawai suka menolong orang lain'],
                                            ['kategori' => 'Harmoni', 'item' => 'Pegawai membangun lingkungan kerja yang kondusif'],
                                            ['kategori' => 'Loyalitas', 'item' => 'Pegawai memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah'],
                                            ['kategori' => 'Loyalitas', 'item' => 'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara'],
                                            ['kategori' => 'Loyalitas', 'item' => 'Pegawai menjaga rahasia jabatan dan negara'],
                                            ['kategori' => 'Adaptabilitas', 'item' => 'Pegawai cepat menyesuaikan diri menghadapi perubahan'],
                                            ['kategori' => 'Adaptabilitas', 'item' => 'Pegawai terus berinovasi dan mengembangkan kreativitas'],
                                            ['kategori' => 'Adaptabilitas', 'item' => 'Pegawai bertindak proaktif'],
                                            ['kategori' => 'Kolaborasi', 'item' => 'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi'],
                                            ['kategori' => 'Kolaborasi', 'item' => 'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah'],
                                            ['kategori' => 'Kolaborasi', 'item' => 'Pegawai menggerakkan pemanfaatan berbagai sumberdaya untuk tujuan bersama']
                                        ];
                                        
                                        $currentKategori = '';
                                    @endphp

                                    @foreach ($pernyataan as $index => $data)
                                        @if($currentKategori != $data['kategori'])
                                            @php $currentKategori = $data['kategori']; @endphp
                                            <tr class="table-secondary">
                                                <td colspan="6" class="fw-bold text-center bg-light">
                                                    <i class="fas fa-folder-open me-2"></i>{{ $currentKategori }}
                                                </td>
                                            </tr>
                                        @endif
                                        <tr class="assessment-row">
                                            <td class="text-center fw-semibold">{{ $index + 1 }}</td>
                                            <td class="text-start">{{ $data['item'] }}</td>
                                            @for ($i = 1; $i <= 4; $i++)
                                            <td class="text-center">
                                                <div class="form-check d-flex justify-content-center">
                                                    <input type="radio" 
                                                           class="form-check-input assessment-radio" 
                                                           name="pernyataan[{{ $index }}]" 
                                                           value="{{ $i }}" 
                                                           id="p{{ $index }}_{{ $i }}"
                                                           required>
                                                    <label class="form-check-label visually-hidden" for="p{{ $index }}_{{ $i }}">{{ $i }}</label>
                                                </div>
                                            </td>
                                            @endfor
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Summary Section --}}
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="mb-0"><i class="fas fa-chart-pie me-1"></i>Ringkasan Penilaian</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="scoreSummary">
                                            <div class="d-flex justify-content-between">
                                                <span>Total Skor:</span>
                                                <span id="totalScore" class="fw-bold">0</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span>Rata-rata:</span>
                                                <span id="averageScore" class="fw-bold">0.0</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span>Kategori:</span>
                                                <span id="category" class="fw-bold">-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-info">
                                    <div class="card-header bg-info text-white">
                                        <h6 class="mb-0"><i class="fas fa-comments me-1"></i>Catatan Tambahan</h6>
                                    </div>
                                    <div class="card-body">
                                        <textarea class="form-control" name="catatan" rows="4" placeholder="Masukkan catatan atau saran untuk kandidat (opsional)"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Submit Buttons --}}
                        <div class="d-flex justify-content-between align-items-center mt-5">
                            <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                                <i class="fas fa-undo me-1"></i>Reset Form
                            </button>
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg shadow" id="submitBtn" disabled>
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Penilaian
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer Info --}}
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 bg-light">
                <div class="card-body text-center">
                    <h6 class="text-muted mb-3">Sistem Penilaian Pegawai Teladan</h6>
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const assessmentRadios = document.querySelectorAll('.assessment-radio');
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');
    const submitBtn = document.getElementById('submitBtn');
    const totalScoreEl = document.getElementById('totalScore');
    const averageScoreEl = document.getElementById('averageScore');
    const categoryEl = document.getElementById('category');
    
    const totalQuestions = 21;
    
    function updateProgress() {
        const answeredQuestions = new Set();
        
        assessmentRadios.forEach(radio => {
            if (radio.checked) {
                const questionIndex = radio.name.match(/\d+/)[0];
                answeredQuestions.add(questionIndex);
            }
        });
        
        const answered = answeredQuestions.size;
        const percentage = Math.round((answered / totalQuestions) * 100);
        
        progressBar.style.width = percentage + '%';
        progressText.textContent = `${answered}/${totalQuestions} (${percentage}%)`;
        
        // Calculate scores
        let totalScore = 0;
        answeredQuestions.forEach(questionIndex => {
            const checkedRadio = document.querySelector(`input[name="pernyataan[${questionIndex}]"]:checked`);
            if (checkedRadio) {
                totalScore += parseInt(checkedRadio.value);
            }
        });
        
        const averageScore = answered > 0 ? (totalScore / answered).toFixed(2) : 0;
        
        totalScoreEl.textContent = totalScore;
        averageScoreEl.textContent = averageScore;
        
        // Determine category
        let category = '-';
        if (answered === totalQuestions) {
            if (averageScore >= 3.5) category = 'Sangat Baik';
            else if (averageScore >= 3.0) category = 'Baik';
            else if (averageScore >= 2.5) category = 'Cukup';
            else category = 'Perlu Perbaikan';
        }
        
        categoryEl.textContent = category;
        categoryEl.className = 'fw-bold';
        if (category === 'Sangat Baik') categoryEl.classList.add('text-success');
        else if (category === 'Baik') categoryEl.classList.add('text-primary');
        else if (category === 'Cukup') categoryEl.classList.add('text-warning');
        else if (category === 'Perlu Perbaikan') categoryEl.classList.add('text-danger');
        
        // Enable submit button when all questions answered
        submitBtn.disabled = answered < totalQuestions;
        
        if (percentage === 100) {
            progressBar.classList.remove('bg-primary');
            progressBar.classList.add('bg-success');
        } else {
            progressBar.classList.remove('bg-success');
            progressBar.classList.add('bg-primary');
        }
    }
    
    assessmentRadios.forEach(radio => {
        radio.addEventListener('change', updateProgress);
    });
    
    // Form validation
    document.getElementById('penilaianForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const kandidat = document.getElementById('kandidat').value;
        const namaPenilai = document.getElementById('nama_penilai').value;
        
        if (!kandidat || !namaPenilai) {
            alert('Mohon lengkapi semua data yang diperlukan!');
            return;
        }
        
        if (confirm('Apakah Anda yakin ingin mengirim penilaian ini?')) {
            // Simulate form submission
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Penilaian berhasil dikirim! Terima kasih atas partisipasi Anda.');
                // Reset form or redirect
                resetForm();
            }, 2000);
        }
    });
});

function resetForm() {
    if (confirm('Apakah Anda yakin ingin menghapus semua data yang telah diisi?')) {
        document.getElementById('penilaianForm').reset();
        document.getElementById('progressBar').style.width = '0%';
        document.getElementById('progressText').textContent = '0/21 (0%)';
        document.getElementById('submitBtn').disabled = true;
        document.getElementById('totalScore').textContent = '0';
        document.getElementById('averageScore').textContent = '0.0';
        document.getElementById('category').textContent = '-';
    }
}

function previewData() {
    const kandidat = document.getElementById('kandidat').value;
    const namaPenilai = document.getElementById('nama_penilai').value;
    const jabatan = document.getElementById('jabatan_penilai').value;
    
    if (!kandidat) {
        alert('Mohon pilih kandidat terlebih dahulu!');
        return;
    }
    
    let preview = `PREVIEW PENILAIAN\n\n`;
    preview += `Penilai: ${namaPenilai}\n`;
    preview += `Jabatan: ${jabatan}\n`;
    preview += `Kandidat: ${kandidat}\n`;
    preview += `Total Skor: ${document.getElementById('totalScore').textContent}\n`;
    preview += `Rata-rata: ${document.getElementById('averageScore').textContent}\n`;
    preview += `Kategori: ${document.getElementById('category').textContent}\n\n`;
    
    alert(preview);
}
</script>
@endpush

@endsection