@extends('layouts.app')

@section('title', 'Kelola LeadBO Indicators')

@php use Illuminate\Support\Str; @endphp

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Kelola LeadBO Indicators</h2>

    <a href="{{ route('admin.leadbo.create') }}" class="btn btn-primary mb-3">Tambah Indikator</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th style="width: 60px;">No</th>
                <th>Konten</th>
                <th style="width: 100px;">Warna</th>
                <th style="width: 150px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- PERBAIKAN: Menghapus "$i =>" dari perulangan --}}
            @forelse ($indicators as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{!! Str::limit($item->content, 80) !!}</td>
                <td><span class="badge bg-{{ $item->color }}">{{ $item->color }}</span></td>
                <td>
                    <a href="{{ route('admin.leadbo.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.leadbo.destroy', $item->id) }}" method="POST" class="d-inline">
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

    {{-- Bagian pagination (links) sudah dihapus dari sini --}}

</div>
@endsection