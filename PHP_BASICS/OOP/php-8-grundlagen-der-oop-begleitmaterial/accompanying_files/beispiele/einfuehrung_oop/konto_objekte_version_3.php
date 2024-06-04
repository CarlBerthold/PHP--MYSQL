<?php

require_once 'konto.php';

$sparbuch = new Konto();
var_dump($sparbuch);

$tagesgeldKonto = new Konto();
var_dump($tagesgeldKonto);

$giroKonto = new Konto();
var_dump($giroKonto);
