@extends('layouts.app')

@section('title', 'Tambah LeadBO Indicator')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Tambah LeadBO Indicator</h2>

    <form action="{{ route('admin.leadbo.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea name="content" class="form-control" rows="4" required>{{ old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Warna</label>
            <select name="color" class="form-select" required>
                <option value="primary">Primary</option>
                <option value="success">Success</option>
                <option value="warning">Warning</option>
                <option value="info">Info</option>
                <option value="danger">Danger</option>
                <option value="secondary">Secondary</option>
                <option value="dark">Dark</option>
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.leadbo.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
