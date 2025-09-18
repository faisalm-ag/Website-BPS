@extends('layouts.app')

@section('title', 'Kelola Model Implementasi')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Kelola Model Implementasi</h2>

    <a href="{{ route('admin.cultural-models.create') }}" class="btn btn-primary mb-3">Tambah Model</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Icon</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($models as $model)
            <tr>
                <td>{{ $model->title }}</td>
                <td><i class="fas fa-{{ $model->icon }}"></i></td>
                <td>{{ $model->description }}</td>
                <td>
                    <a href="{{ route('admin.cultural-models.edit', $model) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.cultural-models.destroy', $model) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
