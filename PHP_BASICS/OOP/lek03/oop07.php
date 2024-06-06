<?php

// require __DIR__ . '/inc/Konto.php';
// require __DIR__ . '/inc/Konto.php'; // => Fatal error: Cannot declare class Konto, because the name is already in use in ...
require_once __DIR__ . '/inc/Konto.php';

$sparbuch = new Konto();
var_dump($sparbuch);

$tagesgeldKonto = new Konto();
var_dump($tagesgeldKonto);

$giroKonto = new Konto();
var_dump($giroKonto);

// Was passiert, wenn wir die runden Klammern bei der Erzeugung eines Objektes mittels des Schlüsselwort new weglassen

$pfaendungsSchutzKonto = new Konto;
var_dump($pfaendungsSchutzKonto);

// sofern die Klasse über keine Constructor-Methode verfügt bzw. diese keine Parameter definiert hat, kann das runde Klammerpäarchen bei der Instanziierung weggelassen werden -> wird noch genauer betrachtet