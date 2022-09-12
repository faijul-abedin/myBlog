<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>

    <h1>
        I am from Post Create View.

        <a href="<?php echo route('post.index') ?>">All Posts</a>
    </h1>

    <form action="<?php echo url('post/store'); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Tittle Here"><br><br>
        <textarea name="details" cols="30" rows="10" placeholder="Details Here"></textarea><br><br>
        <button>Submit</button>
    </form>
    
</body>
</html>