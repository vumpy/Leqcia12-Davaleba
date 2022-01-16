<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="d-flex justify-content-center" style="margin-top:10px">
        <a class="btn btn-primary" href="/add" role="button">Add New Post</a>
    </div>

<!-- 
    <h1>CREATE POST!!!!</h1>
    <div>
        <form method="get" action="/posts">
            <input type="text" name="author" placeholder="Enter your name">
            <input type="text" name="title" placeholder="Enter post title">
            <input type="text" name="content" placeholder="Enter post body">
            <input type="text" name="img" placeholder="optional: image URL">
            <button>Post a post</button>
        </form>
    </div> -->

    <hr>

    <div class="col">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($posts as $post)
                        <div>
                            <div class="card" >
                                <div class="card-body">
                                    <h2 class="card-text">Author: {{ $post->author }}</h2>
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <h3 class="card-title">{{ $post->content }}</h3>
                                    <a class="btn btn-primary" href="post/{{$post->id}}">Go to Post</a>
                                    <form method="POST" action="delete/post/{{$post->id}}" style="margin-top:10px">
                                        @csrf
                                        <button class="btn btn-primary">Delete</button>
                                    </form>
                                </div>
                            </div>

                        </div>                            
                        @endforeach
                    </div>
                </div>

</body>
</html>