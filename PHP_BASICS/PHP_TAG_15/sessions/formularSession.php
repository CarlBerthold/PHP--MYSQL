<?php

session_start();
//$username = $_POST['username'];
$username = 'carl';
$password = '1234';
// $username = $_POST['username'];
// $password = $_POST['password'];
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

//var_dump($_POST);

if($_POST) 
{
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
}

var_dump($_SESSION['username']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formularSession2.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>