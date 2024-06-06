<?php

require_once __DIR__ . '/inc/Person.php';

$remolt = new Person();
$remolt->setVorname('Marc');
$remolt->setNachname('Remolt');

var_dump($remolt);
