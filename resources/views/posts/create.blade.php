@extends('layouts.main')

@section('main-content')

    <h1 class="mt-5 mb-5">Create new Post</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" class="form-control" type="text" value="{{ old('title') }}" name="title">
        </div>

        <div class="form-group">
            <label for="post">Post</label>
            <textarea id="post" class="form-control" name="post" cols="30" rows="10">{{ old('post') }}</textarea>
        </div>

        @foreach ($tags as $tag)
            <div class="form-check d-inline mr-2">
                <input class="form-check-input " type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
                <label for="tag-{{ $loop->iteration }}">{{ $tag->name}}</label>
            </div>
        @endforeach

        <input class="btn btn-primary mt-4 d-block" type="submit" value="Create Post">
    
    </form>

@endsection