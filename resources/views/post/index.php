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

    <table border="1" width="100%" style="border-color: red;">
        <thead>
            <th>Serila No</th>
            <th>Title</th>
            <th>Detaile</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post){ ?>
                <tr>
                    <td>
                        <?php echo $post->id;?>
                    </td>
                    <td>
                        <?php echo $post->title;?>
                    </td>
                    <td>
                        <?php echo $post->details;?>
                    </td>
                    <td style="text-align: center;"> <a href="<?php echo url('post/show', $post->id); ?>">Show Details</a>
                         || <a href="<?php echo url('post/edit', $post->id); ?>">Edit Post</a> || <form action="<?php 
                        echo url('post/delete', $post->id); ?>" method="POST">
                        <?php echo csrf_field();?>
                        <input hidden type="text" name="_method" value="DELETE">
                        <button>Delete</button>
                    </form>
                    </td>
                </tr>
          <?php  }

            ?>
        </tbody>

    </table>
    
</body>
</html>