<?php

# typschwache Vergleiche bei Strings

$string1 = 'Hallo';
$string2 = 'hallo';

var_dump($string1 == $string2);
var_dump($string1 > $string2);
var_dump($string1 < $string2);



$string1 = 'Hallo';
$string2 = 'HalLo';

var_dump($string1 == $string2);
var_dump($string1 > $string2);
var_dump($string1 < $string2);

// 'H' == 'H' && 'a' == 'a' && 'l' == 'l' && 'l' == 'L' && 'o' == 'o'

$string1 = 'Hallo';
$string2 = 'Hallo ';

var_dump($string1 == $string2);

$string1 = 'Hallo';
$string2 = ' Hallo';

var_dump($string1 == $string2);