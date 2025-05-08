@extends('layouts.app')

@section('content')
    <h2>All Posts</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-2">Create Post</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr><th>Title</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
