<?php
session_start();

$userData = [
    [
        'name' => 'admin',
        'loginname' => 'admin',
        'password' => 'admin',
    ],
    [
        'name'=> 'user',
        'loginname' => 'user',
        'password' => 'user',
    ],
    [
        'name' => 'test',
        'loginname' => 'test',
        'password' => 'test',
    ],
];

$loginNames = array_column($userData, 'password', 'loginname');


if($_POST) {
    $user = array_reduce($userData, fn ($carry, $user) => ($user['loginname'] === $_POST['loginname']) ? $user['name'] : $carry);


    if(array_key_exists($_POST['loginname'], $loginNames) &&  $_POST['password'] === $loginNames[$_POST['loginname']]) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['user'] = $user;

         echo "Hallo {$user} ! Du bist eingelogged";
         exit;
    }
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
            <label for="loginname">Username:</label>
            <input 
                type="text" 
                name="loginname" 
                id="loginname" 
                value="<?= isset($_POST['loginname'])? $_POST['loginname'] : '' ?>">
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
