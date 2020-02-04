<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('posts.index') }}">Blog Posts</a></li>
        <li><a href="{{ route('posts.create') }}">Add Blog Post</a></li>
        <li><a href="register">Register</a></li>
    </ul>
@yield('content')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
