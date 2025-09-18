@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pertanyaan Teladan</h1>

    <form action="{{ route('admin.teladan.update', $teladan->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" 
                   value="{{ old('kategori', $teladan->kategori) }}">
        </div>

        <div class="mb-3">
            <label>Pertanyaan</label>
            <textarea name="pertanyaan" class="form-control" required>{{ old('pertanyaan', $teladan->pertanyaan) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.teladan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
