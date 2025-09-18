@extends('layouts.app')

@section('title', 'Detail SysBO')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-info mb-3">Detail Indikator SysBO</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="fw-bold">Indikator</h5>
            <p>{{ $sysbo->indikator }}</p>

            <h5 class="fw-bold">Deskripsi</h5>
            <p>{{ $sysbo->deskripsi }}</p>

            <h5 class="fw-bold">Warna</h5>
            <span class="badge bg-{{ $sysbo->color }}">{{ $sysbo->color }}</span>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('admin.sysbo.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
