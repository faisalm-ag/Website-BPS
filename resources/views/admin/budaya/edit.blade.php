@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pertanyaan Budaya</h1>

    <form action="{{ route('admin.budaya.update', $budaya->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" 
                   value="{{ old('kategori', $budaya->kategori) }}">
        </div>

        <div class="mb-3">
            <label>Pertanyaan</label>
            <textarea name="pertanyaan" class="form-control" required>{{ old('pertanyaan', $budaya->pertanyaan) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.budaya.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
