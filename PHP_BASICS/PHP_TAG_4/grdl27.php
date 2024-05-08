<?php

echo strval(3.14) . PHP_EOL;
echo strval('abc') . PHP_EOL;
echo strval(42) . PHP_EOL;
echo strval(42.0) . PHP_EOL;
echo strval(1e7) . PHP_EOL;
echo strval(null) . PHP_EOL;
echo strval(true) . PHP_EOL;
echo strval(false) . PHP_EOL;

var_dump(strval(3.14));
var_dump(strval('abc'));
var_dump(strval(42));
var_dump(strval(42.0));
var_dump(strval(1e7));
var_dump(strval(null));
var_dump(strval(true));
var_dump(strval(false));

echo 3.14 . PHP_EOL;

var_dump(3.14);