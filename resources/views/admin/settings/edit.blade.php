@extends('layouts.app')

@section('title', 'Edit Link Footer')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Link Footer</h1>

    <form action="{{ route('admin.footer-links.update', $footerLink) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Section</label>
            <input type="text" name="section" class="form-control" value="{{ $footerLink->section }}">
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $footerLink->title }}">
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control" value="{{ $footerLink->url }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
