@extends('layouts.app')
@section('title','Edit Dasar Hukum')

@section('content')
<div class="container py-4">
    <h3 class="mb-3">Edit Dasar Hukum</h3>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.legal-bases.update', $legalBase) }}" method="POST">
                @method('PUT')
                @include('admin.legal_bases._form')
            </form>
        </div>
    </div>
</div>
@endsection
