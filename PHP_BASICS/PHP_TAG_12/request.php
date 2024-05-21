<?php

var_dump($_REQUEST);

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobale $_REQUEST</title>
</head>
<body>
    <h1>Superglobale $_REQUEST</h1>
    <section>
        <h2>Links mit URL-Query (URL-Parametern)</h2>
        <nav>
            <a href="?color=tomato&age=42.5">Link 1</a>
            <!-- der Browser vervollständigt wie folgt: http://localhost/phpGrundlagen/lek12/get.php?color=tomato&age=42.5 -->
            |
            <a href="get.php?color=green&age=54">Link 2</a>
            |
            <a href="/phpGrundlagen/lek12/get.php?color=pink&age=18">Link 3</a>
            |
            <a href="http://localhost/phpGrundlagen/lek12/get.php?color=blue&age=26">Link 4</a>
            |
            <a href="<?= $_SERVER['PHP_SELF'] ?>?color=black&age=99">Link 5</a>
            || <a href="<?= $_SERVER['PHP_SELF'] ?>?name=Öli der Träner">Link 6</a>
            | <a href="<?= $_SERVER['PHP_SELF'] ?>?name=<?= urlencode('Öli der Träner')?>">Link 7</a>
        </nav>
    </section>
    <hr>
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





