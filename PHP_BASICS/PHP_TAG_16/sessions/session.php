<?php
session_start();


if (ini_get("session.use_cookies")) 
{  // Auslesen aus php.ini, ob die Session Cookie-basiert arbeitet
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000, 
        $params["path"],
        $params["domain"], 
        $params["secure"], 
        $params["httponly"]
    );
}

