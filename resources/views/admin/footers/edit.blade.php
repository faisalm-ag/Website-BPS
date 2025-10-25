@extends('layouts.app')

@section('title', 'Edit Section Footer')

@section('content')
<div class="container">
    <h1>Edit Section Footer</h1>

    <div class="card">
        <div class="card-body">
            {{-- Form action sekarang benar: mengarah ke footers.update dengan ID yang benar --}}
            {{-- Variabel sekarang benar: $footer->id --}}
            <form action="{{ route('admin.footers.update', $footer->id) }}" method="POST"> 
                @csrf
                @method('PUT')

                {{-- Input name sekarang benar: 'title' --}}
                {{-- Variabel sekarang benar: $footer->title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Nama Section</label>
                    <input type="text" 
                           class="form-control @error('title') is-invalid @enderror" 
                           id="title" 
                           name="title" 
                           value="{{ old('title', $footer->title) }}" 
                           required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Field link dan url dihapus --}}

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                {{-- Cancel button sekarang benar: mengarah ke footers.index --}}
                <a href="{{ route('admin.footers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection