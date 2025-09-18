@extends('layouts.app')

@section('title', 'Data Nilai Inti')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Data Nilai Inti</h2>

    <a href="{{ route('admin.core-values.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Icon</th>
                <th>Deskripsi</th>
                <th>Item</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($values as $index => $val)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $val->title }}</td>
                <td>{{ $val->icon }}</td>
                <td>{{ $val->description }}</td>
                <td>
                    @if(!empty($val->items))
                        <ul>
                            @foreach($val->items as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.core-values.edit', $val->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.core-values.destroy', $val->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
