@extends('layouts.app')

@section('title', 'Tambah Link Footer')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Link Footer</h1>

    <form action="{{ route('admin.footer-links.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Section</label>
            <input type="text" name="section" class="form-control">
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
