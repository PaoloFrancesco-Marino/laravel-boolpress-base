@extends('layouts.main')

@section('main-content')
    <h1 class="mt-5 mb-5">Blog Archive</h1>

        <div> 
            @foreach ($posts as $post)
                <ul class="list-group mb-5">
                    <li class="list-group-item"><h4>{{ $post->user->name}}</h4></li>
                    <li class="list-group-item"><h4>{{ $post->title }}</h4></li>
                    <li class="list-group-item">{{ $post->post }}</li>
                    <li class="list-group-item"><h5>Creato il {{ $post->created_at }}, Modificato il {{ $post->updated_at }}</h5></li>
                </ul>
            @endforeach

            <h4>Pagine</h4>
            {{ $posts->links() }}
        </div>

        
@endsection