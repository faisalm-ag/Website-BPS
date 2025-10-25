@extends('layouts.app')

@section('title', 'Edit Link Footer')

@section('content')
<div class="container">
    <h1>Edit Link Footer</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.footer-links.update', $footerLink->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Dropdown untuk memilih Section --}}
                <div class="mb-3">
                    <label for="section_id" class="form-label">Section</label>
                    <select class="form-control @error('section_id') is-invalid @enderror" id="section_id" name="section_id" required>
                        <option value="">Pilih Section</option>
                        @foreach($sections as $section)
                            <option value="{{ $section->id }}" {{ old('section_id', $footerLink->section_id) == $section->id ? 'selected' : '' }}>
                                {{ $section->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('section_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Input untuk Judul Link --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Link</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $footerLink->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Input untuk URL --}}
                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="url" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url', $footerLink->url) }}" required>
                    @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.footers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection