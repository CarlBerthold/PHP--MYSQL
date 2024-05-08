<?php

$stringWert = '420000000000000000000';
// $stringWert = '42001.52';


if ((floatval($stringWert) > PHP_INT_MAX) || (floatval($stringWert) < PHP_INT_MIN)) {
   $ganzZahlWert = floor(floatval($stringWert));
} else {
   $ganzZahlWert = intval($stringWert);
}

echo $ganzZahlWert . ' - ' . gettype($ganzZahlWert);