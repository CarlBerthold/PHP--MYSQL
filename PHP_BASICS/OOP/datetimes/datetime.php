<?php


$datetime1 = new DateTime('1970-01-01'); // angegebenes Datum
$datetime2 = new DateTime('1970-01-01 13:29'); // Datum plus Uhrzeit




$datetime1 = new DateTime('now'); // aktuelles Datum plus Uhrzeit
var_dump($datetime1);

$datetime2 = new DateTime(); // aktuelles Datum plus Uhrzeit
var_dump($datetime2);

$datetime3 = new DateTime(null);
var_dump($datetime3);

$datetime4 = new DateTime(''); // aktuelles Datum plus Uhrzeit
var_dump($datetime4);

$datetime5 = new DateTime(false); // aktuelles Datum plus Uhrzeit
var_dump($datetime5);








$datetime1 = new DateTime('now'); // aktuelles Datum plus Uhrzeit
var_dump($datetime1);

$datetime2 = new DateTime();
var_dump($datetime2);
