<?php

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobale $_POST</title>
</head>
<body>
    <h1>Superglobale $_POST</h1>
    <article>
    <h2>Formular mit Method post</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="color">Farbe: </label><input type="text" name="color" id="color"><br>
            <label for="age">Alter: </label><input type="text" name="age" id="age"><br>
            <button type="submit">wech damit</button>
        </form>
    </article>
</body>
</html>