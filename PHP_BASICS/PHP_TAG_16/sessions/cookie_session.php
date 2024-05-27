<?php

require __DIR__ . '../../../helpers.php';
session_start();

// session_id is a string 
// if the string is empty their is no session started
// var_dump($_SESSION[session_id()]);
// var_dump($_SESSION);
dump($_SESSION);
dd($_SESSION);


$_SESSION['user_name'] = 'Carl';

$sessionStatus = [
    'session_id' => session_id(),
    'session_name' => session_name(),
    'session_status' => session_status(),
    'session_save_path' => session_save_path(),
    'session_cache_limiter' => session_cache_limiter(),
    'session_cache_expire' => session_cache_expire(),
    'session_cookie_lifetime' => session_get_cookie_params()['lifetime'],
    'session_cookie_path' => session_get_cookie_params()['path'],
    'session_cookie_domain' => session_get_cookie_params()['domain'],
    'session_cookie_secure' => session_get_cookie_params()['secure'],
    'session_cookie_httponly' => session_get_cookie_params()['httponly'],
    'session_cookie_samesite' => session_get_cookie_params()['samesite'],
    'session_cookie_name' => session_name(),
];



?>
<!DOCTYPE html>
<html>

<body>
    <h1>Page One</h1>
    <p><?= $_SESSION['user_name'] ?></p>
    <p><a href="cookie_session2.php">open page 2</a></p>
</body>

</html>