<?php
session_start();

// session_id is a string 
// if the string is empty their is no session started
// var_dump($_SESSION[session_id()]);
var_dump($_SESSION);

$_SESSION['user_name'] = 'Carl';



?>
<!DOCTYPE html>
<html>

<body>
    <h1>Page One</h1>
    <p><?= $_SESSION['user_name'] ?></p>
    <p><a href="cookie_session2.php">open page 2</a></p>
</body>

</html>