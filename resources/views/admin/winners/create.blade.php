@extends('layouts.app')

@section('title', 'Tambah Pemenang')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Pemenang</h1>

    <form action="{{ route('admin.winners.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="position" class="form-control">
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>Periode</label>
            <input type="text" name="period" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tanggal Diumumkan</label>
            <input type="date" name="announced_at" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
