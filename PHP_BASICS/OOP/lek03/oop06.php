<?php

// class Konto() // => Parse error: syntax error, unexpected token "(", expecting "{" in ...
class Konto
{

}

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