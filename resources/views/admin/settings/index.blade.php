@extends('layouts.app')

@section('title', 'Pengaturan')

@section('content')
<div class="container">
    <h1 class="mb-4">Pengaturan Website</h1>

    @if ($setting)
    <div class="card mb-3">
        <div class="card-body">
            <p><strong>Judul Situs:</strong> {{ $setting->site_title }}</p>
            <p><strong>Teks Footer:</strong> {{ $setting->footer_text }}</p>
            @if($setting->logo)
            <p><strong>Logo:</strong></p>
            <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" width="150">
            @endif
        </div>
    </div>
    <a href="{{ route('admin.settings.edit', $setting) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('admin.settings.destroy', $setting) }}" method="POST" class="d-inline">
        @csrf @method('DELETE')
        <button class="btn btn-danger">Hapus</button>
    </form>
    @else
    <a href="{{ route('admin.settings.create') }}" class="btn btn-primary">Tambah Pengaturan</a>
    @endif
</div>
@endsection
