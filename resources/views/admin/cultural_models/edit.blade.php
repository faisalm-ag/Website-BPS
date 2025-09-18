@extends('layouts.app')

@section('title', 'Edit Model Implementasi')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit Model Implementasi</h2>

    <form method="POST" action="{{ route('admin.cultural-models.update', $culturalModel) }}">
        @csrf @method('PUT')
        @include('admin.cultural_models._form')
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
