<?php

require_once __DIR__ . '/inc/database.inc.php';

$db = connectDB();

# einen Datensatz verändern

// Datensatz abfragen

try {
    $sql = 'select * from userswhere id=4';
    // holds the db conecction via PDO Object
    $PDOStatement = $db->query($sql);
    // fetches one data from the database and saves it in the $user variable
    $user = $PDOStatement->fetch();

    var_dump($user);
} catch (PDOException $error) {
    echo 'Fehler bei der Abfrage: ' . $error->getMessage();
    die();
}


