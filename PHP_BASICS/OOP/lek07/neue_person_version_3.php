<?php

require_once __DIR__ . '/inc/Person_to_string.php';

$remolt = new Person();
$remolt->setVorname('Marc');
$remolt->setNachname('Remolt');

# magische __toString - diese wird immer aufgerufen (vorausgesetzt sie ist implementier), wenn versucht wird, ein Objekt in einen String umzuwandeln
echo $remolt, PHP_EOL; 

echo strtoupper($remolt), PHP_EOL;

## magische Methode sind normale Methoden mit vorgegebener Signatur, also der Name ist vorgegeben, aber auch die Parameter und der Rückgabewert

echo $remolt->__toString();

## magische Methode müssen immer public sein