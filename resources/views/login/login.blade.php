@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center fade-up">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-primary"><i class="fas fa-lock me-2"></i>Login Pengguna</h3>
                        <p class="text-muted">Silakan masukkan email dan kata sandi Anda</p>
                    </div>

                    {{-- Form login (hanya tampilan) --}}
                    <form>
                        {{-- Email --}}
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control form-control-lg rounded-3" id="email" placeholder="nama@email.com" required>
                        </div>

                        {{-- Password --}}
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Kata Sandi</label>
                            <input type="password" class="form-control form-control-lg rounded-3" id="password" placeholder="Masukkan password" required>
                        </div>

                        {{-- Tombol Login --}}
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary py-2 fs-5 rounded-3">
                                <i class="fas fa-sign-in-alt me-2"></i>Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
@endpush
