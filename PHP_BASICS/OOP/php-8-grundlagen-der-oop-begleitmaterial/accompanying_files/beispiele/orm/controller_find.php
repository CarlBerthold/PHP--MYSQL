<?php

// liefert den Datensatz mit der ID 42 als ein Objekt der Klasse Person
$person = Person::finde(42);
echo $person->getVorname(); // gibt den Eintrag der Spalte vorname aus
