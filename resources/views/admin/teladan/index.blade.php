@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Daftar Pertanyaan Teladan</h1>

    <a href="{{ route('admin.teladan.create') }}" class="btn btn-primary mb-3">Tambah Pertanyaan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Pertanyaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pertanyaan as $q)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $q->kategori }}</td>
                <td>{{ $q->pertanyaan }}</td>
                <td>
                    <a href="{{ route('admin.teladan.edit', $q->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.teladan.destroy', $q->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Yakin hapus pertanyaan ini?')">
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
