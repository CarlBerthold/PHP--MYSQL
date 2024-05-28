<?php


$text = 'Dieser Text gehört Bob, Bob und nur Bob!
Niemand außer Bob darf diesen Text besitzen!
Wenn es jemand außer Bob wagen sollte, diesen
Text besitzen zu wollen, wird diese Person von
Bob schreckliche Konzequenzen zu befürchten haben!';


//$new_text = str_replace('Bob', 'Homer', $text);

//echo $new_text;

$searchString = [
    'Bob',
    'Text',
    'besitzen'
];

$replaceString = [
    'Homer',
    'Schinken',
    'Essen'
];

//echo str_replace($searchString, $replaceString, $text);

$new_text = str_replace($searchString, $replaceString, $text, $count);
echo $new_text, PHP_EOL;
echo 'Anzahl der Ersetzungen: ', $count, PHP_EOL;

$text = 'das ist ein test';
$ausschnitt = trim(substr($text, 3, 2));
echo $ausschnitt, PHP_EOL;