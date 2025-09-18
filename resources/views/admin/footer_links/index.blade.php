@extends('layouts.app')

@section('title', 'Link Footer')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Link Footer</h1>

    <a href="{{ route('admin.footer-links.create') }}" class="btn btn-primary mb-3">Tambah Link</a>

    <table class="table table-bordered">
        <tr>
            <th>Section</th>
            <th>Judul</th>
            <th>URL</th>
            <th>Aksi</th>
        </tr>
        @foreach($footerLinks as $link)
        <tr>
            <td>{{ $link->section }}</td>
            <td>{{ $link->title }}</td>
            <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
            <td>
                <a href="{{ route('admin.footer-links.edit', $link) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.footer-links.destroy', $link) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
