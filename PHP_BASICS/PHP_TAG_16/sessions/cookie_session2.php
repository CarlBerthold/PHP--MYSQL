<?php
session_start();
$user = $_SESSION['user_name'];
// $cookie = $_COOKIE['myCookie'];



//var_dump($_SESSION);
//var_dump($_COOKIE['myCookie']);

?>
<!DOCTYPE html>
<html>

<body>
    <h1>Page Two</h1>
    <p>Status: <?= $user ?></p>
</body>

</html>
