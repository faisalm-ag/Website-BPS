@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Foto Galeri</h1>

    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Foto</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label>File Foto</label>
            <input type="file" name="file" class="form-control" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
