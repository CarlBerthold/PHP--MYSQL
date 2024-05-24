<?php

session_start();
$status = $_SESSION['status'];
$cookie = $_COOKIE['myCookie'];



//var_dump($_SESSION);
//var_dump($_COOKIE['myCookie']);

?>
<!DOCTYPE html>
<html>

<body>
    <h1>Page Two</h1>
    <p>Status: <?= $status ?></p>
    <p><?= $cookie ?></p>
</body>

</html>
