<?php

var_dump($_POST);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>