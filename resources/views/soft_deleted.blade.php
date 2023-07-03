<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Soft Deleted Posts</h1>

    @if ($softDeletedPosts->isEmpty())
        <p>No soft deleted posts found.</p>
    @else
        <ul>
            @foreach ($softDeletedPosts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>