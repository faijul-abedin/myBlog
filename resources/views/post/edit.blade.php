<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>

    <h1>
        I am from Edit Post.
    </h1>

    <form action="{{ route('post.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')    
        {{-- <input hidden type="text" name="_method" value="PUT"> --}}

        <input type="text" value="{{ $post->title }}" name="title" placeholder="Tittle Here"><br><br>
        <textarea name="details" cols="30" rows="10" placeholder="Details Here">{{ $post->details }}</textarea><br><br>
        <button>Update</button>
    </form>
    
</body>
</html>