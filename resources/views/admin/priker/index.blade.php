@extends('layouts.app')

@section('title', 'Kelola Priker')

@php use Illuminate\Support\Str; @endphp

@section('content')
<div class="container mt-4">
    <h2>Daftar Indikator PriKer</h2>
    <a href="{{ route('admin.priker.create') }}" class="btn btn-primary mb-3">Tambah Indikator</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Warna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prikers as $priker)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $priker->judul }}</td>
                    <td>{{ Str::limit($priker->deskripsi, 80) }}</td>
                    <td>{{ $priker->warna }}</td>
                    <td>
                        <a href="{{ route('admin.priker.edit', $priker->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.priker.destroy', $priker->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
