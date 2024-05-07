<?php

// ein beliebiger String - einfache Anführungszeichen
$var1 = 'Hallo Welt';

// ein beliebiger String - doppelte Anführungszeichen
$var2 = "holla mundo";
// ein Integer

$var3 = 23;
// eine numerische Zeichenkette

$var4 = '23';
// eine Fließkommazahl (float bzw. double)

$var5 = 23.5; 
// numerische Zeichenkette mit Fließkommazahl

$var6 = "23.5";
// Datentyp NULL

$var7 = null;
// Datentyp Boolean

$var8 = true;
// Datentyp Boolean
$var9 = false;

var_dump(is_string($var1));
var_dump(is_string($var2));
var_dump(is_string($var3));
var_dump(is_string($var4));
var_dump(is_string($var5));
var_dump(is_string($var6));
var_dump(is_string($var7));
var_dump(is_string($var8));
var_dump(is_string($var8));

var_dump($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9);