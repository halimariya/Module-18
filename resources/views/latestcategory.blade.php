<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        @foreach ($categories as $category)
      
            <h2>{{ $category->name }}</h2>

            @php
                $latestPost = $category->getLatestPost();
            @endphp

            @if ($latestPost)
                <h3>{{ $latestPost->title }}</h3>
            @else
                <p>No posts found in this category.</p>
            @endif

            <hr>
        @endforeach
    
    
   
</body>
</html>