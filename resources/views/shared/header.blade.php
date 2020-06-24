<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    {{-- bootsrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="nav-brand text-white text-uppercase">
                Blog
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href=" {{ route('users.index') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href=" {{ route('posts.index') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href=" {{ route('posts.create') }}">New Post</a>
                </li>

            </ul>
        </nav>
    </header>