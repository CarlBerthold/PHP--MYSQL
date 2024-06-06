<?php

$sparbuch = new stdClass(); // abweichend vom WBT hier die Klasse stdClass

// dynamische Attribute erzeugen - geht nur bei Objekten der stdClass

$sparbuch->glaeubiger = 'Jan Teriete';
$sparbuch->guthaben = 100;

var_dump($sparbuch);

// Attribute auslesen

echo $sparbuch->glaeubiger, PHP_EOL;
echo $sparbuch->guthaben, PHP_EOL;