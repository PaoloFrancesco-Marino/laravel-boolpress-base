@extends('layouts.main')

@section('main-content')
    <h1 class="mt-5">Blog Users</h1>

    <table class="table mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->address }}</td>
                    <td> {{ $user->info['city'] }}</td>
                    <td> {{ $user->info['country'] }}</td>
                    <td> {{ $user->info['phone'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mb-5">Blog Posts</h2>
        <div>
            @foreach ($users as $user)
                <h3 class="mt-5 mb-3">{{ $user->name }}</h3>
                <ul class="list-group mb-5">
                    @foreach ($user->posts as $post)
                        <li class="list-group-item"><h4>{{ $post->title }}</h4></li>
                        <li class="list-group-item">{{ $post->post }}</li>
                        <li class="list-group-item"><h5>Creato il {{ $post->created_at }}, Modificato il {{ $post->updated_at }}</h5></li>
                    @endforeach
                </ul>
                
            @endforeach
        </div>

@endsection