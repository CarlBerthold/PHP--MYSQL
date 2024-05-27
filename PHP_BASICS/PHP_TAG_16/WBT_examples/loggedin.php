<?php

# Session starten
session_start();

// if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE) {
if(empty($_SESSION['loggedin'])) {
    header('Location: login.php', TRUE, 307);
    exit;
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>geschützter Bereich</title>
</head>
<body>
    <nav>
        [ <a href="logout.php">Logout</a> ]
    </nav>
    <h1>geschützter Bereich</h1>
    <p>Hallo <?= $_SESSION['name'] ?>, Du bist eingeloggt!</p>
</body>
</html>