<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>

    <h3> I am form post View </h3>

    <table border="1" width="100%" style="border-color: rgb(113, 9, 9);">
        <thead>
            <th>Serila No</th>
            <th>Title</th>
            <th>Detaile</th>
            <th>Action</th>
        </thead>
        <tbody>
            
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->details }}
                    </td>
                    <td style="text-align: center;"> <a href="{{ route('post.show', $post->id) }}">Show Details</a>
                         || <a href="{{ route('post.edit', $post->id) }}">Edit Post</a> || <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
    
</body>
</html>