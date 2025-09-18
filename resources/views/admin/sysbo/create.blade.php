@extends('layouts.app')

@section('title', 'Tambah SysBO')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-success mb-3">Tambah Indikator SysBO</h2>

    <form action="{{ route('admin.sysbo.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Indikator</label>
            <textarea name="indikator" class="form-control" required>{{ old('indikator') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Warna</label>
            <select name="color" class="form-select" required>
                <option value="">-- Pilih Warna --</option>
                @foreach (['primary','success','warning','info','danger','secondary','dark'] as $color)
                    <option value="{{ $color }}" {{ old('color') == $color ? 'selected' : '' }}>
                        {{ ucfirst($color) }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.sysbo.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
