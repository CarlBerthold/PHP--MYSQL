<?php

require_once __DIR__ . '/inc/Person.php'; 

session_start();

// Objekt in der Session ablegen
$person = new Person();

$person->setVorname('Jan');
$person->setNachname('Teriete');

$_SESSION['teriete'] = $person;

?>
[<a href="test_version_3b.php">nächste Seite</a>]
[<a href="test_version_3c.php">weitere Seite</a>]