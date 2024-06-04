<?php

require_once 'konto.php';

$sparbuch = new Konto();
$sparbuch->glaeubiger = 'Jan Teriete';
$sparbuch->guthaben = 100;

var_dump($sparbuch);
