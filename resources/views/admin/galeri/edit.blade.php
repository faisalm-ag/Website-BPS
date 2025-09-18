@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Foto Galeri</h1>

    <form action="{{ route('admin.galeri.update', $foto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nama Foto</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $foto->nama) }}" required>
        </div>

        <div class="mb-3">
            <label>File Foto (biarkan kosong jika tidak ingin mengganti)</label><br>
            <img src="{{ asset('storage/' . $foto->file) }}" alt="{{ $foto->nama }}" width="150" class="img-thumbnail mb-2">
            <input type="file" name="file" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
 