@extends('layouts.app')
@section('title','Tambah Dasar Hukum')

@section('content')
<div class="container py-4">
    <h3 class="mb-3">Tambah Dasar Hukum</h3>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.legal-bases.store') }}" method="POST">
                @include('admin.legal_bases._form')
            </form>
        </div>
    </div>
</div>
@endsection
