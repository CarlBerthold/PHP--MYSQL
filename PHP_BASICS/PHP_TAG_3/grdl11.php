<?php

# Funktion isset()

$var1 = NULL;
$var2 = 42;

var_dump(isset($var1));
var_dump(isset($var2));

// Variable nur deklariert
$var3;

var_dump(isset($var3)); // => bool(false)
// isset gibt keine Warning aus, wenn die Variable nur deklariert oder nicht deklariert ist

var_dump(isset($var4));

$var5 = 'Hallo Welt';
unset($var5);

var_dump(isset($var5));