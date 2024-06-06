<?php

# Variable initialisieren
$var = 'Oli';

echo $var, PHP_EOL;

# den Wert einer Variablen ändern
$var = 42;

echo $var, PHP_EOL;

$oli = 'ich bin der kleine oli';

echo $oli, PHP_EOL;

# variable Variablen

$var = 'oli';

echo $var, PHP_EOL;

echo $$var, PHP_EOL; // => ich bin der kleine oli

// PHP löst die Variable auf und wenn diese den Wert eines Variablenbezeichners besitz wird dieser für die Variable verwendet

echo ${'oli'}, PHP_EOL;
echo $oli, PHP_EOL;

# Beispiel aus php.net

$a = 'Hallo';
$$a = 'Welt'; // eine neue Variable definieren $Hallo = 'Welt';

echo "$a {$$a}", PHP_EOL;
echo $a, ' ', $$a, PHP_EOL;

echo "$a $Hallo", PHP_EOL;
echo $a, ' ', $Hallo, PHP_EOL;

// weiteres Beispiel


$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a, PHP_EOL; //Returns Hello
echo $$a, PHP_EOL; //Returns World
echo $$$a, PHP_EOL; //Returns Foo
echo $$$$a, PHP_EOL; //Returns Bar
echo $$$$$a, PHP_EOL; //Returns a

echo $$$$$$a, PHP_EOL; //Returns Hello
echo $$$$$$$a, PHP_EOL; //Returns World

//... and so on ...//

# Frage aus WBT
$bear = "bruno";

$$bear = "bailee"; // $bruno = 'bailee';

$bear = "bernd";

$$bear = "barbara"; // $bernd = 'barbara';

echo "Hey we are the bears ".$bear.", ".$$bear.", ".$bruno." and ".$bernd.".";