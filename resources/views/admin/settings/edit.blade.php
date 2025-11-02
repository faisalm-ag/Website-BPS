@extends('layouts.app')

@section('title', 'Edit Pengaturan')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Pengaturan Website</h1>

    {{-- Arahkan ke route 'settings.update' dengan ID dari $setting --}}
    <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="site_title" class="form-label">Judul Website</label>
            {{-- Gunakan variabel $setting, bukan $footerLink --}}
            <input type="text" name="site_title" id="site_title" class="form-control" 
                   value="{{ old('site_title', $setting->site_title) }}">
        </div>

        <div class="mb-3">
            <label for="footer_text" class="form-label">Teks Footer</label>
            <input type="text" name="footer_text" id="footer_text" class="form-control" 
                   value="{{ old('footer_text', $setting->footer_text) }}">
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo (Biarkan kosong jika tidak ganti)</label><br>
            @if($setting->logo)
                <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" width="150" class="img-thumbnail mb-2">
            @endif
            <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update Pengaturan</button>
        <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection