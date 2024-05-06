<?php 

echo floor(4.13), PHP_EOL;
echo floor(4.99), PHP_EOL;


// falsche rundung bei float 
echo floor((0.1 + 0.7) * 10), PHP_EOL;
$result = (0.1 + 0.7);

$number1 = 0.1;
$number2 = 0.7;

// echo round($result * 10), PHP_EOL;
// echo round($result * 10, 2), PHP_EOL;

echo bcadd($number1, $number2, 1), PHP_EOL;
echo floor(bcadd($number1, $number2, 1) * 10), PHP_EOL;



var_dump(is_float(3.14));
var_dump(is_float('abc'));
var_dump(is_float(42));
var_dump(is_float(42.0));
var_dump(is_float(1e7));
var_dump(is_float(true));
?>