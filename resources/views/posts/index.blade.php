@extends('layouts.main')

@section('main-content')
    <h1 class="mt-5 mb-5">Blog Archive</h1>

        <div> 
            @foreach ($posts as $post)
                <ul class="list-group mb-2">
                    <li class="list-group-item"><h4 class="font-weight-bold">{{ $post->user->name}}</h4></li>
                    <li class="list-group-item"><h4>{{ $post->title }}</h4></li>
                    <li class="list-group-item">{{ $post->post }}</li>
                    <li class="list-group-item"><h5>Creato il {{ $post->created_at }}, Modificato il {{ $post->updated_at }}</h5></li>
                </ul>
                
                <h5>Comments</h5>
                <ul class="mb-5">
                    @foreach ($post->comments as $comment)
                        <h6 class="font-weight-bold">{{ $comment->name }}</h6>
                        <span>creato il: {{ $comment->created_at }}</span>
                        <p>{{ $comment->comment }}</p>
                    @endforeach
                </ul>
                
            @endforeach

            <h4>Pages</h4>
            {{ $posts->links() }}
        </div>

        
@endsection