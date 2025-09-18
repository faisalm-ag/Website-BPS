@extends('layouts.app')

@section('title', 'Kelola PeBO Indicators')

@php use Illuminate\Support\Str; @endphp

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Kelola PeBO Indicators</h2>

    <a href="{{ route('admin.pebo.create') }}" class="btn btn-primary mb-3">Tambah Indikator</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Konten</th>
                <th>Warna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($indicators as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{!! Str::limit($item->content, 80) !!}</td>
                <td><span class="badge bg-{{ $item->color }}">{{ $item->color }}</span></td>
                <td>
                    <a href="{{ route('admin.pebo.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.pebo.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
