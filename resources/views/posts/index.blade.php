@extends('layouts.main')

@section('main-content')

    @if (session('post-deleted'))
        <div class="alert alert-success mt-5">
            <p>the post has been deleted</p>
            {{ session('post-deleted') }}
        </div>
    @endif

    <h1 class="mt-5 mb-5">Blog Archive</h1>

        <div> 
            @foreach ($posts as $post)
                <ul class="list-group mb-5">
                    <li class="list-group-item"><h4 class="font-weight-bold">{{ $post->user->name}}</h4></li>
                    <li class="list-group-item"><h4>{{ $post->title }}</h4></li>
                    <li class="list-group-item">{{ $post->post }}</li>
                    <li class="list-group-item"><h5>Creato il {{ $post->created_at }}, Modificato il {{ $post->updated_at }}</h5></li>
                    <li class="list-group-item"> <a class="btn btn-primary" href="{{ route('posts.show', $post->slug)}}">Read More...</a></li>
                </ul>                
            @endforeach
            
            
            <div class="wrap-pagination mt-5">
                {{ $posts->links() }}
            </div>
        </div>

@endsection