@extends('layouts.app')

@section('title', 'Edit SysBO')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-warning mb-3">Edit Indikator SysBO</h2>

    <form action="{{ route('admin.sysbo.update', $sysbo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Indikator</label>
            <textarea name="indikator" class="form-control" required>{{ old('indikator', $sysbo->indikator) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $sysbo->deskripsi) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Warna</label>
            <select name="color" class="form-select" required>
                @foreach (['primary','success','warning','info','danger','secondary','dark'] as $color)
                    <option value="{{ $color }}" {{ $sysbo->color == $color ? 'selected' : '' }}>
                        {{ ucfirst($color) }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-warning">Update</button>
        <a href="{{ route('admin.sysbo.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
