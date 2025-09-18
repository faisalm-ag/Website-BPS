@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Daftar Foto Galeri</h1>

    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary mb-3">Tambah Foto</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Preview</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fotos as $foto)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $foto->nama }}</td>
                <td>
                    <img src="{{ asset('storage/' . $foto->file) }}" alt="{{ $foto->nama }}" width="120" class="img-thumbnail">
                </td>
                <td>
                    <a href="{{ route('admin.galeri.edit', $foto->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.galeri.destroy', $foto->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Yakin hapus foto ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
