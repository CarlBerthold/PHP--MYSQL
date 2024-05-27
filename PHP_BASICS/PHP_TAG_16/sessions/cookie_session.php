<?php
require __DIR__ . '../../../helpers.php';
session_start();
// session_id is a string 
// if the string is empty their is no session started

// var_dump($_SESSION[session_id()]);
// var_dump($_SESSION);
dump($_SESSION);

$_SESSION['user_name'] = 'Carl';

$sessionStatus = [
    'PHP_SESSION_DISABLED, wenn Sessions deaktiviert sind.',
    'PHP_SESSION_NONE, wenn Sessions aktiviert sind, aber keine existiert.',
    'PHP_SESSION_ACTIVE, wenn Sessions aktiviert sind und eine existiert.',
];

dump($_SESSION);
dump(session_id());
dump(session_status());

//session_register_shutdown();
session_destroy();

dump($_SESSION);
dump(session_id());
dump(session_status());

?>
<!DOCTYPE html>
<html>

<body>
    <h1>Page One</h1>
    <p><?= $_SESSION['user_name'] ?></p>
    <p><a href="cookie_session2.php">open page 2</a></p>
</body>

</html>