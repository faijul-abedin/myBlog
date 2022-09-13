<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
</head>
<body>
    <h1>Showing single post...</h1>

    <h2><?php
        echo $post->id;
        ?></h2>
    <h3><?php
        echo $post->title;
        ?></h3>
    <p><?php
        echo $post->details;
        ?></p>

</body>
</html>