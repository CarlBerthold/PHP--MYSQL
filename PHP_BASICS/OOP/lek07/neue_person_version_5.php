<?php

require_once __DIR__ . '/inc/Person_konstructor_array.php';

// die Werte als Array dem Constructor übergeben
$remolt = new Person(['Marc', 'Remolt']);

echo $remolt, PHP_EOL; // => Marc Remolt

# noch eine Instanz erzeugen

$oli = new Person();
var_dump($oli);

