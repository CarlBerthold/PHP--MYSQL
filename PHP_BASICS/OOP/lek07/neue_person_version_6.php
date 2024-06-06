<?php

require_once __DIR__ . '/inc/Person_konstructor_assoziatives_array.php';

// die Werte als assoziatives Array dem Constructor übergeben
$remolt = new Person([
    'vorname' => 'Marc', 
    'nachname' => 'Remolt',
]);

echo $remolt, PHP_EOL; // => Marc Remolt

# noch eine Instanz erzeugen

$oli = new Person();
var_dump($oli);

# noch eine weiter Instanz erzeugen

$sebastian = new Person([
    'vorname' => 'Sebastian',
]);
var_dump($sebastian);
