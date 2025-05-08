@extends('layouts.app')

@section('content')
    <h1>Welcome to Laravel CRUD App</h1>
    <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">View Posts</a>
@endsection
