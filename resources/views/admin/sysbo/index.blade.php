@extends('layouts.app')

@section('title', 'Daftar SysBO')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold text-primary">Daftar Indikator SysBO</h2>
        <a href="{{ route('admin.sysbo.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>

    @if($sysbos->count())
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Indikator</th>
                    <th>Deskripsi</th>
                    <th>Warna</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sysbos as $i => $sysbo)
                <tr>
                    <td class="text-center">{{ $i + 1 }}</td>
                    <td>{{ $sysbo->indikator }}</td>
                    <td>{{ Str::limit($sysbo->deskripsi, 50) }}</td>
                    <td>
                        <span class="badge bg-{{ $sysbo->color }}">{{ $sysbo->color }}</span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.sysbo.show', $sysbo->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('admin.sysbo.edit', $sysbo->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.sysbo.destroy', $sysbo->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="alert alert-warning">Belum ada data SysBO.</div>
    @endif
</div>
@endsection
