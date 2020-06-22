@extends('layouts.main')

@section('main-content')
    <h1>Blog Users</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr >
                    <td> {{ $user->name }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection