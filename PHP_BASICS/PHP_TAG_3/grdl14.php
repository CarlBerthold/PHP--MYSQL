<?php

# Integerzahlen

$int1 = 1234567;
var_dump(gettype($int1));

# max. größte Integerzahl (64-Bit-System)
$int2 = 9223372036854775807;
var_dump($int2);

// was passiert, wenn ich den Zahlenbereich verlasse
$int2++;
var_dump($int2);

# min. kleinste Integerzahl (64-Bit-System)

$int3 = -9223372036854775807;
var_dump($int3);

$int3--;
$int3--;
var_dump($int3);


## PHP vordefinierte Konstanten

$int4 = PHP_INT_MAX;
$int5 = PHP_INT_MIN;

var_dump($int4, $int5);

// Test
$int6 = -9223372036854775808;
var_dump($int6);
var_dump(-9223372036854775808);