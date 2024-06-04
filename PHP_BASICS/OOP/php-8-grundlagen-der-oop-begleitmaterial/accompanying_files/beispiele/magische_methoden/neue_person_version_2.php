<?php

require_once 'person.php';

$remolt = new Person();
$remolt->setVorname('Marc');
$remolt->setNachname('Remolt');

echo $remolt; //Erzeugt einen Fehler
