<?php

require_once __DIR__ . '/inc/Konto.php';

/* $sparbuch = new Konto();
$sparbuch->glaeubiger = 'Jan Teriete'; // => Deprecated: Creation of dynamic property Konto::$glaeubiger is deprecated in ...
$sparbuch->guthaben = 100;

var_dump($sparbuch); */

# Seit PHP 8 gilt das dynamische Erzeugen von Attributen als deprecated und sollte auch nicht mehr gemacht werden
## das Beispiel im WBT ist/war noch für PHP 7.3 geschrieben


$sparbuch = new stdClass();
$sparbuch->glaeubiger = 'Jan Teriete';
$sparbuch->guthaben = 100;

var_dump($sparbuch);