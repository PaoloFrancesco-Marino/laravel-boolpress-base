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
@endsection