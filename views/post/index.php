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
                    <td style="text-align: center;">
                        Show || Edit || Delete
                    </td>
                </tr>
          <?php  }

            ?>
        </tbody>

    </table>
    
</body>
</html>