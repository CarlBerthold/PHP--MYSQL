<?php

require_once __DIR__ . '/inc/Person.php';

$remolt = new Person();
$remolt->setVorname('Marc');
$remolt->setNachname('Remolt');

echo $remolt; // => Fatal error: Uncaught Error: Object of class Person could not be converted to string in ...
