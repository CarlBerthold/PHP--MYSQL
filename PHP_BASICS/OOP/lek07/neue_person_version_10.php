<?php

require_once __DIR__ . '/inc/Person_final.php';

// die Werte als assoziatives Array dem Constructor übergeben
$remolt = new Person([
    'vorname' => 'Marc', 
    'nachname' => 'Remolt',
]);

echo $remolt, PHP_EOL; // => Marc Remolt

# noch eine Instanz erzeugen

$oli = new Person();
var_dump($oli);

// $oli->__construct([//...]);
$oli->setAttributes([
    'vorname' => 'Oli',
    'nachname' => 'Vogt',
]);

var_dump($oli);

# noch eine weiter Instanz erzeugen

$sebastian = new Person([
    'vorname' => 'Sebastian',
]);
var_dump($sebastian);

// was passiert, wenn ein key-value-Paar übergeben wird, zu dem kein Attribut definiert ist

$erika = new Person([
    'vorname' => 'Erika',
    'nachname' => 'Mustermann',
    'geborene' => 'Gabler',
]);

var_dump($erika);

