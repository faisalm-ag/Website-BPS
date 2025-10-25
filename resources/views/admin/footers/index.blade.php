@extends('layouts.app')

@section('title', 'Manajemen Footer')

@section('content')
<div class="container">
    <h1 class="mb-4">Manajemen Tampilan Footer</h1>

    {{-- Tombol 'Tambah Link' mengarah ke 'footer-links.create' --}}
    <a href="{{ route('admin.footer-links.create') }}" class="btn btn-primary mb-3">Tambah Link Baru</a>

    {{-- Tombol 'Tambah Section' mengarah ke 'footers.create' --}}
    <a href="{{ route('admin.footers.create') }}" class="btn btn-info mb-3">Tambah Section Baru</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($sections->isEmpty())
        <div class="alert alert-info">
            Belum ada data section footer.
        </div>
    @else
        @foreach($sections as $section)
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Section: {{ $section->title }}</h4>
                    <div>
                        {{-- INI SUDAH DIPERBAIKI (Tombol Section) --}}
                        <a href="{{ route('admin.footers.edit', $section->id) }}" class="btn btn-secondary btn-sm">Edit Section</a>
                        <form action="{{ route('admin.footers.destroy', $section->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus section ini beserta semua link di dalamnya?')">
                            @csrf
                            @method('DELETE')
                            <button type_submit" class="btn btn-danger btn-sm">Hapus Section</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Judul Link</th>
                                <th>URL</th>
                                <th style="width: 150px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($section->links as $link)
                                <tr>
                                    <td>{{ $link->title }}</td>
                                    <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                                    <td>
                                        {{-- INI SUDAH BENAR (Tombol Link) --}}
                                        <a href="{{ route('admin.footer-links.edit', $link->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.footer-links.destroy', $link->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus link ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Belum ada link di section ini.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection