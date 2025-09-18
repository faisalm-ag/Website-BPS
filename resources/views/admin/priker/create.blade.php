@extends('layouts.app')

@section('title', 'Tambah Priker')

@section('content')
<div class="container mt-4">
    <h2>Tambah Indikator PriKer</h2>
    <form action="{{ route('admin.priker.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label>Warna</label>
            <input type="text" name="warna" class="form-control" placeholder="contoh: primary, success, warning" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.priker.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
