<?php 

$test = 0;
$test = '3.1415';

$array = [1, 2, 3, 4, 5];

var_dump(intval($test));
var_dump((int) $test);
var_dump((float) $test);
var_dump((string) $test);
var_dump((bool) $test);
var_dump((array) $test);
var_dump((object) $test);