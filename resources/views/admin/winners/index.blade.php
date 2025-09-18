@extends('layouts.app')

@section('title', 'Daftar Pemenang')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Pemenang</h1>

    <a href="{{ route('admin.winners.create') }}" class="btn btn-primary mb-3">Tambah Pemenang</a>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Judul</th>
            <th>Periode</th>
            <th>Tanggal Umumkan</th>
            <th>Aksi</th>
        </tr>
        @foreach($winners as $winner)
        <tr>
            <td>{{ $winner->name }}</td>
            <td>{{ $winner->position }}</td>
            <td>{{ $winner->title }}</td>
            <td>{{ $winner->period }}</td>
            <td>{{ $winner->announced_at ? $winner->announced_at->format('d-m-Y') : '-' }}</td>
            <td>
                <a href="{{ route('admin.winners.edit', $winner) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.winners.destroy', $winner) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
