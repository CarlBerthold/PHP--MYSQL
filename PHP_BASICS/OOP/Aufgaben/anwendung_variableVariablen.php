<?php

$article = [
    [
        'language' => 'de',
        'name'=>'Auto',
        'color'=>'rot',
        'price' => 25000,
        'currency' => 'Euro'
    ],
    [
        'language' => 'en',
        'name'=>'car',
        'color'=>'red',
        'price' => 26500,
        'currency' => 'Dollar'
    ],
    [
        'language' => 'fr',
        'name'=>'voiture',
        'color'=>'rouge',
        'price' => 25000,
        'currency' => 'Euro'
    ],
    [
        'language' => 'it',
        'name'=>'automobile',
        'color'=>'rosso',
        'price' => 25000,
        'currency' => 'Euro'
    ],
]; 

$preferedLanguage = 'de';

/* foreach($article as $language => $value) 
{
    var_dump($value);
} */
# auf der Webseite soll je nach Spracheinstellung z. B. folgende Ausgabe erfolgen

// Ausgabe: Auto, rot: 25000 Euro

$languages = array_column($article, 'language');
$index = array_search($preferedLanguage, $languages)? : 0;

//var_dump($index);

echo $article[$index]['name'] . ': ' . ',';