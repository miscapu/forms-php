<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Folders in Root with mkdir function PHP</title>
</head>
<body>

<form action="" method="post">
    <label for="estrutura">Enter word for structure folder: </label>
    <input name="estrutura" type="text" id="estrutura">
</form>

    <?php
    /**
     * Create folder
     */
    $estrutura = $_POST['estrutura'];

    mkdir( $estrutura, 0777, true );

    ?>

    <p>Folder: https://upload.itechsolutionsbr.com/FormJackson/<?= $estrutura;?></p>

</body>
</html>