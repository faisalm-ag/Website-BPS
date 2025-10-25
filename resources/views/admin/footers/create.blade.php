@extends('layouts.app')

@section('title', 'Tambah Section Footer Baru')

@section('content')
<div class="container">
    <h1>Tambah Section Footer Baru</h1>

    <div class="card">
        <div class="card-body">
            {{-- Form action sekarang benar: mengarah ke footers.store --}}
            <form action="{{ route('admin.footers.store') }}" method="POST"> 
                @csrf
                
                {{-- Input name sekarang benar: 'title' --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Nama Section Baru</label>
                    <input type="text" 
                           class="form-control @error('title') is-invalid @enderror" 
                           id="title" 
                           name="title" 
                           value="{{ old('title') }}" 
                           required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Field link dan url dihapus karena tidak perlu --}}

                <button type="submit" class="btn btn-primary">Simpan</button>
                {{-- Cancel button sekarang benar: mengarah ke footers.index --}}
                <a href="{{ route('admin.footers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection