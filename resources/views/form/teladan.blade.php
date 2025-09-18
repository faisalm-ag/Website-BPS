@extends('layouts.app')

@section('title', 'Penilaian Pegawai Teladan')
@section('content')

{{-- Google Font --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<div class="container-fluid px-3">
    
  {{-- Header Teladan --}}
  <div class="container py-5">
      <div class="text-center mb-4">
          <div class="mb-3">
              <i class="fas fa-pie-chart fa-2x text-primary"></i>
          </div>
          <h2 class="fw-bold text-primary mb-2">Penilaian Pegawai Teladan</h2>
          <p class="text-muted fs-5 mb-1">Sistem Evaluasi Kinerja & Budaya Organisasi</p>
          <p class="text-muted fs-5 mb-3">BPS Kabupaten Tasikmalaya</p>
      </div>
  </div>

  {{-- Main Form --}}
  <div class="row">
      <div class="col-12">
          <div class="card border-0 shadow-lg">
              <div class="card-body p-4">
                  <div class="card-header bg-primary text-white py-3 mb-4 rounded-3">
                      <h5 class="mb-0 fw-bold">
                          <i class="fas fa-edit me-2"></i>Form Penilaian Pegawai Teladan
                      </h5>
                  </div>
                  <form method="POST" action="{{ route('admin.teladan.store') }}" id="penilaianForm">
                      @csrf

                      {{-- Data Diri --}}
                      <div class="card-header bg-primary text-white py-3 mb-4 rounded-3">
                          <h5 class="mb-0 fw-bold"><i class="fas fa-user me-2"></i> Data Diri</h5>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6 mb-3">
                              <label class="form-label fw-semibold">Nama</label>
                              <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label class="form-label fw-semibold">Jenis Kelamin</label>
                              <input type="text" class="form-control" 
                                  value="{{ Auth::user()->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}" readonly>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label class="form-label fw-semibold">Umur</label>
                              <input type="text" class="form-control" 
                                  value="{{ \Carbon\Carbon::parse(Auth::user()->birth_date)->age ?? '-' }} tahun" readonly>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label class="form-label fw-semibold">Pendidikan Terakhir</label>
                              <input type="text" class="form-control" value="{{ Auth::user()->education }}" readonly>
                          </div>
                      </div>

                      {{-- Progress Bar --}}
                      <div class="mb-4">
                          <div class="d-flex justify-content-between align-items-center mb-2">
                              <span class="fw-semibold">Progress Penilaian:</span>
                              <span id="progressText">0/0 (0%)</span>
                          </div>
                          <div class="progress" style="height: 8px;">
                              <div class="progress-bar bg-success" role="progressbar" id="progressBar" style="width: 0%"></div>
                          </div>
                      </div>

                      {{-- Tabel Penilaian Dinamis --}}
                      <div class="table-responsive">
                          <table class="table table-bordered align-middle">
                              <thead class="table-primary text-center">
                                  <tr>
                                      <th style="width: 60px;" class="fw-bold">No</th>
                                      <th class="text-start fw-bold">Aspek Penilaian</th>
                                      <th style="width: 80px;" class="fw-bold">STS<br><small>(1)</small></th>
                                      <th style="width: 80px;" class="fw-bold">TS<br><small>(2)</small></th>
                                      <th style="width: 80px;" class="fw-bold">S<br><small>(3)</small></th>
                                      <th style="width: 80px;" class="fw-bold">SS<br><small>(4)</small></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php $no = 1; @endphp
                                  @foreach($pertanyaan as $kategori => $items)
                                      <tr class="table-secondary">
                                          <td colspan="6" class="fw-bold text-center bg-light">
                                              <i class="fas fa-folder-open me-2"></i>{{ $kategori }}
                                          </td>
                                      </tr>
                                      @foreach($items as $index => $p)
                                          <tr class="assessment-row">
                                              <td class="text-center fw-semibold">{{ $no++ }}</td>
                                              <td class="text-start">{{ $p->pertanyaan }}</td>
                                              @for ($i = 1; $i <= 4; $i++)
                                                  <td class="text-center">
                                                      <div class="form-check d-flex justify-content-center">
                                                          <input type="radio" 
                                                                 class="form-check-input assessment-radio" 
                                                                 name="jawaban[{{ $p->id }}]" 
                                                                 value="{{ $i }}" 
                                                                 id="p{{ $p->id }}_{{ $i }}"
                                                                 required>
                                                          <label class="form-check-label visually-hidden" for="p{{ $p->id }}_{{ $i }}">{{ $i }}</label>
                                                      </div>
                                                  </td>
                                              @endfor
                                          </tr>
                                      @endforeach
                                  @endforeach
                              </tbody>
                          </table>
                      </div>

                      {{-- Ringkasan --}}
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
                                  <div class="card-header bg-primary text-white">
                                      <h6 class="mb-0"><i class="fas fa-comments me-1"></i>Catatan Tambahan</h6>
                                  </div>
                                  <div class="card-body">
                                      <textarea class="form-control" name="catatan" rows="4" placeholder="Masukkan catatan atau saran (opsional)"></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>

                      {{-- Submit --}}
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

    const totalQuestions = {{ $pertanyaan->flatten()->count() }};

    function updateProgress() {
        const answered = document.querySelectorAll('.assessment-radio:checked').length;
        const percentage = Math.round((answered / totalQuestions) * 100);

        progressBar.style.width = percentage + '%';
        progressText.textContent = `${answered}/${totalQuestions} (${percentage}%)`;

        // Hitung skor
        let totalScore = 0;
        document.querySelectorAll('.assessment-radio:checked').forEach(radio => {
            totalScore += parseInt(radio.value);
        });
        const averageScore = answered > 0 ? (totalScore / answered).toFixed(2) : 0;

        totalScoreEl.textContent = totalScore;
        averageScoreEl.textContent = averageScore;

        // Tentukan kategori
        let category = '-';
        if (answered === totalQuestions) {
            if (averageScore >= 3.5) category = 'Sangat Baik';
            else if (averageScore >= 3.0) category = 'Baik';
            else if (averageScore >= 2.5) category = 'Cukup';
            else category = 'Perlu Perbaikan';
        }
        categoryEl.textContent = category;

        // Enable submit jika semua terjawab
        submitBtn.disabled = answered < totalQuestions;
    }

    assessmentRadios.forEach(radio => {
        radio.addEventListener('change', updateProgress);
    });
});

function resetForm() {
    document.getElementById('penilaianForm').reset();
    document.getElementById('progressBar').style.width = '0%';
    document.getElementById('progressText').textContent = '0/0 (0%)';
    document.getElementById('submitBtn').disabled = true;
    document.getElementById('totalScore').textContent = '0';
    document.getElementById('averageScore').textContent = '0.0';
    document.getElementById('category').textContent = '-';
}
</script>
@endpush

@endsection
