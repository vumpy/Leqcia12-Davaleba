<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <a class="btn btn-primary" href="/" role="button">Go back</a>
    
    @foreach ($posts as $post)
            <h2 class="card-text">Author: {{ $post->author }}</h2>
            <h5 class="card-title">{{ $post->title }}</h5>
            <h3 class="card-title">{{ $post->content }}</h3>
            <form method="POST" action="delete/post/{{$post->id}}">
                @csrf
                <button class="btn btn-primary">Delete This post</button>
            </form>

    <hr>
            
    <form method="get" action="/post/{{$post->id}}">
        <div style="width:500px">
            <input type="text" name="author" class="form-control" placeholder="Enter your name">
            <input type="text" name="content" class="form-control" placeholder="Enter your comment">
            <button class="btn btn-primary">Submit A Comment</button>
        </div>
    </form>

    <hr>
    @endforeach
    <h1>Comments:</h1>

    @foreach ($comments as $comment)
        <h2 class="card-text">Author: {{ $comment->author }}</h2>
        <h5 class="card-title"></h5>
        <h3 class="card-title">{{ $comment->content }}</h3>
    @endforeach

</body>
</html>