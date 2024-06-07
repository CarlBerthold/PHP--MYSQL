<?php

// parent class needs to be loaded first
require_once __DIR__ . '/inc/Kategorie.php';
// child class needs to be loaded second
require_once __DIR__ . '/inc/Bekleidung.php';



$hose = new Bekleidung();
/* var_dump($hose);
exit; */

$hose->gebeAus();
$hose->gebeKategorieAus(); // funktioniert, da die Kindklasse 'alle' Attribute und Methoden der Elternklasse erbt

$kategorieObject = new Kategorie();
$kategorieObject->gebeKategorieAus();

$kategorieObject = new Kategorie();

exit;
$kategorieObject->gebeAus(); // Now this will work as the Kategorie class inherits the gebeAus() method from the Bekleidung class
//var_dump($kategorieObject);



