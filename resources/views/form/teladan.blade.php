@extends('layouts.app')

@section('content')

{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<div class="container-fluid px-3">
    {{-- Header dengan Gradient Background --}}
    <div class="row mb-5">
        <div class="col-12">
            <div class="header-section text-white text-center py-5 rounded-4 shadow-lg position-relative overflow-hidden">
                <div class="header-overlay"></div>
                <div class="header-content position-relative">
                    <div class="mb-4">
                        <i class="fas fa-trophy fa-3x text-warning mb-3"></i>
                    </div>
                    <h1 class="fw-bold display-4 mb-3">Penilaian Pegawai Teladan</h1>
                    <p class="lead fs-3 mb-2">Sistem Evaluasi Kinerja & Budaya Organisasi</p>
                    <p class="fs-4">BPS Kabupaten Tasikmalaya</p>
                    <div class="mt-4">
                        <span class="badge bg-warning text-dark px-4 py-2 fs-6">Triwulan II - 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Winner Announcement --}}
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0 shadow-lg bg-gradient-success">
                <div class="card-body text-center text-white py-4">
                    <div class="mb-3">
                        <i class="fas fa-trophy fa-2x text-warning"></i>
                    </div>
                    <h4 class="fw-bold mb-2">🎉 Selamat Kepada 🎉</h4>
                    <h3 class="fw-bold text-warning mb-2">Bapak Muhamad Sobari, S.ST., M.STAT.</h3>
                    <p class="mb-0 fs-5">Atas Terpilihnya Menjadi Pegawai Teladan BPS Kab. Tasikmalaya TW - I Tahun 2025</p>
                </div>
            </div>
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

                        {{-- Informasi Penilai --}}
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label for="nama_penilai" class="form-label fw-semibold">
                                    <i class="fas fa-user me-1"></i>Nama Penilai
                                </label>
                                <input type="text" class="form-control" name="nama_penilai" id="nama_penilai" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jabatan_penilai" class="form-label fw-semibold">
                                    <i class="fas fa-briefcase me-1"></i>Jabatan
                                </label>
                                <input type="text" class="form-control" name="jabatan_penilai" id="jabatan_penilai" required>
                            </div>
                        </div>

                        <hr class="my-4">

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
                                <button type="submit" class="btn btn-success btn-lg shadow" id="submitBtn" disabled>
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

@push('styles')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
    }

    .header-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
        overflow: hidden;
    }

    .header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.1);
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    }

    .bg-gradient-success {
        background: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%) !important;
    }

    .card {
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-2px);
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
        border-color: #dee2e6;
    }

    .form-check-input:checked {
        background-color: #28a745;
        border-color: #28a745;
    }

    .assessment-row:hover {
        background-color: #f8f9fa;
    }

    .progress {
        border-radius: 10px;
    }

    .progress-bar {
        border-radius: 10px;
        transition: width 0.3s ease;
    }

    .btn {
        border-radius: 8px;
        font-weight: 500;
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .form-select, .form-control {
        border-radius: 8px;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
    }

    .form-select:focus, .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    .badge {
        font-size: 0.8em;
    }

    @media (max-width: 768px) {
        .table-responsive {
            font-size: 0.875rem;
        }
        
        .display-4 {
            font-size: 2rem;
        }
        
        .display-6 {
            font-size: 1.5rem;
        }
    }
</style>
@endpush

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