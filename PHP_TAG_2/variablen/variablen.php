Variablen ausgabe in die Konsole ohne Interpreter
Interpreter -> browser (kann z.b Html rendern)
PHP -> konsole (zeichenkette)


<?php 

// declare a variable without value is not usable in PHP //
$declaration;
$number = 1; // integer
$float = 1.1234; // negativ -> -1.1234
$largeNumber = 1.2E7; // 1.2 * 10^7


echo $declaration, $number;
// echo($float, $largeNumber); // nicht valide ?;

// declare a variable with value is usable in PHP //
$greeting = 'Hello World';
echo($greeting);
echo PHP_EOL;
echo($largeNumber);


// STRINGS mit Anführungszeichen //


// echo "Niclas said: "I really like PHP""; // Syntax Error
echo "Niclas said: \"I really like PHP\""; // => Niclas said: "I really like PHP"
echo 'Niclas said: "I really like PHP"'; // => Niclas said: "I really like PHP"
// echo 'Niclas said: 'I really like PHP''; // => Syntax Error
echo 'Niclas said: \'I really like PHP\''; // => Niclas said: 'I really like PHP'
echo "Niclas said: 'I really like PHP'"; // => Niclas said: 'I really like PHP'
echo "Niclas said: \"I 'really' like PHP\""; // => Niclas said: "I 'really' like PHP"

?>