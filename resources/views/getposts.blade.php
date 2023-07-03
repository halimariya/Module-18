<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Posts in {{ $category->name }}</h1>

    @if ($posts->isEmpty())
        <p>No posts found for this category.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>