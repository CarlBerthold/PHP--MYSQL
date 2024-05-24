<?php

session_start();
$_SESSION['status'] = 'Session started';
$cookyLover = setcookie('myCookie', 'helloCookie', time() + 3600); // bool

 var_dump($_SESSION);
// var_dump($cookyLover); // bool

?>
<!DOCTYPE html>
<html>

<body>
    <h1>Page One</h1>
    <p><?= $_SESSION['status'] ?></p>
    <p><a href="session2.php">open page 2</a></p>
</body>

</html>