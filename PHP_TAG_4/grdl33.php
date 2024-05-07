<?php
require 'functions.php';


// dynamic converting from types with arithmetic operators
echo ' 10.2' - ' 25.4 ', PHP_EOL;
var_dump('10' + '25');


var_dump('5 tüten chips' + '3 Flaschen Limonade', PHP_EOL);
echo('5 tüten chips' + '3 Flaschen Limonade'), PHP_EOL;


echo '7.5 Stunden Unterricht' - 'eine Pause von 2 Stunden', PHP_EOL;



// explicit converting from types
echo((int)'5 tüten chips' + (int)'3 Flaschen Limonade'), PHP_EOL;
echo(int) '7.5 Stunden Unterricht' * (int)'eine Pause von 2 Stunden', PHP_EOL;


$chips = ['5 tüten chips', '3 Flaschen Limonade'];

dump($chips);