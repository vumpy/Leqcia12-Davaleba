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


    <h1>New post:</h1>
    <form method="get" action="/">
        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Enter Author">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Title">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
</form>

</body>
</html>