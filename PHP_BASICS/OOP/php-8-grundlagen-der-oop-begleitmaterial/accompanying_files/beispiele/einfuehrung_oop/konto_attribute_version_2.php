<?php

require_once 'konto.php';

$sparbuch = new Konto();
$sparbuch->glaeubiger = 'Jan Teriete';
$sparbuch->guthaben = 100;

echo $sparbuch->guthaben; //gibt 100 aus

$kontostand = $sparbuch->guthaben; //auch Zuweisungen funktionieren
echo $kontostand;
