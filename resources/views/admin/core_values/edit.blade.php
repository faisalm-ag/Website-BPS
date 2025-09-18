@extends('layouts.app')

@section('title', 'Edit Nilai Inti')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit Nilai Inti</h2>

    <form action="{{ route('admin.core-values.update', $coreValue->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" value="{{ $coreValue->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Icon</label>
            <input type="text" name="icon" value="{{ $coreValue->icon }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $coreValue->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Item Perilaku</label>
            <textarea name="items" class="form-control">{{ implode("\n", $coreValue->items ?? []) }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
