@extends('layouts.main')

@section('main-content')
    <h1 class="mt-5 mb-5">{{ $post->title }}</h1>

    <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit Post</a>

    <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <input class="btn btn-danger ml-2" type="submit" value="Delete Post">
    </form>

    <p class="mt-5">{{ $post->post }}</p>

    <h5>Comments</h5>
    <ul class="mb-5">
        @foreach ($post->comments as $comment)
            <h6 class="font-weight-bold">{{ $comment->name }}</h6>
            <span>creato il: {{ $comment->created_at }}</span>
            <p>{{ $comment->comment }}</p>
        @endforeach
    </ul>

    <section class="mt-5">
        <h4>#Tags</h4>
        @forelse ($post->tags as $tag)
            <span class="badge badge-pill badge-info">{{ $tag->name }}</span>
        @empty
            <span class="badge badge-pill badge-warning">No #Tags</span>
        @endforelse
    </section>  
@endsection