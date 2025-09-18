@extends('layouts.app')

@section('title', 'Dasar Hukum')

@section('content')
<div class="container py-5 justify">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-balance-scale me-2"></i>Dasar Hukum
        </h2>
        <p class="text-muted">Dasar Hukum Umum untuk pelaksanaan Survei Budaya Organisasi BPS Kab. Tasikmalaya adalah:</p>
    </div>

    <div class="row g-4" id="legalList">
        @foreach ($legalBases as $index => $lb)
            @php
                $item = $lb->title;
                $maxPreviewLength = 175;
                $isLong = strlen($item) > $maxPreviewLength;
                $previewText = $isLong ? substr($item, 0, $maxPreviewLength) . '...' : $item;
            @endphp
            <div class="col-md-6 fade-up">
                <div class="card h-100 shadow-sm border-0 rounded-4 d-flex flex-column">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex mb-2">
                            <div class="me-3 d-flex align-items-start">
                                <span class="badge bg-primary rounded-circle text-white p-3 fs-6" style="color:#fff !important;">
                                    {{ $index + 1 }}
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 text-body preview-text" data-full="{{ $item }}">
                                    {{ $previewText }}
                                </p>
                            </div>
                        </div>
                        @if($isLong)
                            <button class="btn btn-sm btn-outline-secondary mt-auto align-self-start toggle-btn">Selengkapnya</button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
<script>
document.querySelectorAll('.toggle-btn').forEach(button => {
    button.addEventListener('click', function () {
        const para = this.previousElementSibling.querySelector('.preview-text');
        const fullText = para.dataset.full;
        const isExpanded = this.innerText === 'Tutup';
        if (isExpanded) {
            para.innerText = fullText.slice(0, 200) + '...';
            this.innerText = 'Selengkapnya';
        } else {
            para.innerText = fullText;
            this.innerText = 'Tutup';
        }
    });
});

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
}, { threshold: 0.1 });

document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
@endpush
