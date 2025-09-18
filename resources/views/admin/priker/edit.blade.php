@extends('layouts.app')

@section('title', 'Edit Priker')

@section('content')
<div class="container mt-4">
    <h2>Edit Indikator PriKer</h2>
    <form action="{{ route('admin.priker.update', $priker->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $priker->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required>{{ $priker->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Warna</label>
            <input type="text" name="warna" value="{{ $priker->warna }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.priker.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
