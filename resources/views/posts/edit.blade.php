@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input name="title" value="{{ $post->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
        </div>
        <button class="btn btn-success">Update</button>
    </form>
@endsection
