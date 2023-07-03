<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
        </tr>

        @foreach ($posts as $post)
            <tr>
                <td>{{$post->category->name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->desc}}</td>
            </tr>
          

        @endforeach
    </table>
    
   
</body>
</html>