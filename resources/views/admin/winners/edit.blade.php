@extends('layouts.app')

@section('title', 'Edit Pemenang')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Pemenang</h1>

    <form action="{{ route('admin.winners.update', $winner) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $winner->name }}">
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="position" class="form-control" value="{{ $winner->position }}">
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $winner->title }}">
        </div>
        <div class="mb-3">
            <label>Periode</label>
            <input type="text" name="period" class="form-control" value="{{ $winner->period }}">
        </div>
        <div class="mb-3">
            <label>Tanggal Diumumkan</label>
            <input type="date" name="announced_at" class="form-control" value="{{ $winner->announced_at }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
