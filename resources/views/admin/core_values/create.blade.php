@extends('layouts.app')

@section('title', 'Tambah Nilai Inti')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Tambah Nilai Inti</h2>

    <form action="{{ route('admin.core-values.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Icon</label>
            <input type="text" name="icon" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Item Perilaku (pisahkan per baris)</label>
            <textarea name="items" class="form-control" placeholder="Baris 1&#10;Baris 2"></textarea>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
