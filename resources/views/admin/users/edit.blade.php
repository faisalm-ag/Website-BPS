@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf @method('PUT')
        @include('admin.users.form')
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
