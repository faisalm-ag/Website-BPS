@extends('layouts.app')

@section('title', 'Edit LeadBO Indicator')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit LeadBO Indicator</h2>

    <form action="{{ route('admin.leadbo.update', $leadbo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea name="content" class="form-control" rows="4" required>{{ old('content', $leadbo->content) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Warna</label>
            <select name="color" class="form-select" required>
                @foreach (['primary','success','warning','info','danger','secondary','dark'] as $color)
                    <option value="{{ $color }}" @selected($leadbo->color == $color)>
                        {{ ucfirst($color) }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.leadbo.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
