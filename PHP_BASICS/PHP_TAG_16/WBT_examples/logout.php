<?php

# Session starten
session_start();

## Session zurücksetzen
$_SESSION = [];

if (ini_get("session.use_cookies")) {  // Auslesen aus php.ini, ob die Session Cookie-basiert arbeitet
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"],
    $params["domain"], $params["secure"], $params["httponly"]
    );
 }

session_destroy();

header('Location: login.php', TRUE, 307);

// 9q6b0vgo0biin1hgp79a6vua77
// 3ob63ikbo87qvu537pg7llep0r