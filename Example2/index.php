<?php
include 'fileslogic.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Form</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Upload File</h3>
                <input type="file" name="myfile">
                <button type="submit" name="save">upload</button>
            </form>
        </div>
    </div>

</body>
</html>