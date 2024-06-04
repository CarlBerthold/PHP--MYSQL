<?php

require_once 'inc/funktionen.inc.php';

require_once 'src/Entities/Adresse.php';
require_once 'src/Entities/Person.php';

$adresse = new Adresse();
$adresse->setStrasse('Musterstrasse 7');
$adresse->setPlz('90411');
$adresse->setOrt('Musterstadt');

$person = new Person();
$person->setName('Max Muster');
$person->setEmail('max@example.com');
$person->setAdresse($adresse);

require_once 'templates/zeige_person.tpl.php';
