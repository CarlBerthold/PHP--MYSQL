<?php

session_start();

if($_POST) 
{
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    // var_dump($_SESSION);
}

//$userName = $_SESSION['username'];
$userName = $_SESSION['username'];
$password = $_SESSION['password'];

var_dump($userName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <p><?= $userName ?></p>
    <p><?= $password ?></p>
</body>
</html>