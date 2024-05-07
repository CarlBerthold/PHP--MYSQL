<?php
// strlen() gibt die Anzahl der Zeichen als Integer zurück

$str = 'Kaffee';

echo strlen($str) . PHP_EOL;
var_dump(strlen($str));

$str = '    ';
$str = '    Kaffee    ';

echo strlen($str) . PHP_EOL;
var_dump(strlen($str));


// Unicode is not supported in PHP 

$text1 = 'Hey there its me';
$text2 = 'öäüßÄÜÖ';


echo strlen($text1) . PHP_EOL;
echo strlen($text2) . PHP_EOL;
echo mb_strlen($text1) . PHP_EOL;
echo mb_strlen($text2) . PHP_EOL;

$text3 = '中文字';
echo strlen($text3) . PHP_EOL;
echo mb_strlen($text3) . PHP_EOL;

$text4 = 'پریسا';
echo strlen($text4) . PHP_EOL;
echo mb_strlen($text4) . PHP_EOL;
