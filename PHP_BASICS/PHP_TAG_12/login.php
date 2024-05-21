<?php

/* var_dump($_POST);
var_dump($_GET);

var_dump($_SERVER['REQUEST_METHOD'] === 'POST'); */

$userData = [
    [
        'username' => 'admin',
        'password' => 'admin',
    ],
    [
        'username' => 'user',
        'password' => 'user',
    ],
    [
        'username' => 'test',
        'password' => 'test',
    ],
];


// using foreach loop
if($_POST) {
    foreach($userData as $user) {
        if($user['username'] === $_POST['username'] && $user['password'] === $_POST['password']) {
            header('Location: success.php');
            echo "Login successful" . ' ' .  $user['username'];
            exit;
        }
    }
}

// using array methods
$loginNames = array_column($userData, 'loginname');

if ($_POST) {
    if (($index = array_search($_POST['loginname'], $loginNames)) !== false) {
        if ($_POST['password'] === $userData[$index]['password']) {
            // hier Weiterleitung auf die gewünschte Seite
            echo "Hallo {$user['loginname']} ! Du bist eingelogged";
            exit;
        }
    }

    $message = 'Die Kombination Benutzername und Kennwort stimmen nicht überein!';
}


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
            <input 
                type="text" 
                name="username" 
                id="username" 
                value="<?= isset($_POST['username'])? $_POST['username'] : '' ?>">
        </div>
        <div>
            <label for="password">Password:</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                value="<?php $_POST ?? ''?>">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>