@extends('layouts.app')

@section('title','Kelola Dasar Hukum')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Kelola Dasar Hukum</h3>
        <a href="{{ route('admin.legal-bases.create') }}" class="btn btn-primary">
            <i class="fa fa-plus me-1"></i> Tambah
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width:60px">#</th>
                            <th>Judul / Isi</th>
                            <th style="width:180px" class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($legalBases as $i => $lb)
                            <tr>
                                <td>{{ $legalBases->firstItem() + $i }}</td>
                                <td>{{ Str::limit($lb->title, 140) }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.legal-bases.edit', $lb) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.legal-bases.destroy', $lb) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Hapus item ini?')">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3" class="text-center py-4">Belum ada data</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($legalBases->hasPages())
            <div class="card-footer">
                {{ $legalBases->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
