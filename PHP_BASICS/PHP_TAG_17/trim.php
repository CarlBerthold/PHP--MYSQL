<?php


$text = '  das ist ein Beispiel  ';
var_dump($text);

var_dump(trim($text)); // 'das ist ein Beispiel'


$text = "\t\vJörg\r\n Teller \0";

var_dump(trim($text));


// trim() mit weiterem Parameter $charlist

$text = '  ßdas ist ein Beispiel mit sonderzeichen wie Straße und überlaufenden gullies am Görli  ';

$text = trim($text, '    ßdas'); // 'Straße und überlaufenden gullies am Görli'

var_dump(ltrim($text));
var_dump(rtrim($text));