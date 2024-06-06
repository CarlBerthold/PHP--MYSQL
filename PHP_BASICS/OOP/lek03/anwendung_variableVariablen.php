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

# auf der Webseite soll je nach Spracheinstellung z. B. folgende Ausgabe erfolgen

// Ausgabe: Auto, rot: 25000 Euro

# bevorzugte Sprache aus WBT $preferedLanguages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];

$preferedLanguage = 'en';

// ein Array mit den Sprachen erzeugen

$languages = array_column($article, 'language');

// var_dump($languages);

// Indexposition der bevorzugten Sprache herausfinde

$index = array_search($preferedLanguage, $languages); // ?: 1;

echo $article[$index]['name'] . ', ' . $article[$index]['color'] . ': ' . $article[$index]['price'] . ' ' . $article[$index]['currency'], PHP_EOL;

# mit variablen Variablen

foreach ($article as $description) {
    $lang = $description['language'];
    foreach ($description as $key => $value) {
        $varname = $key . '_' . $lang; // Definition einer Variablen mit dem Variablenbezeichner für die variable Variable
        $$varname = $value; // variable Variable -> es wird eine Variable erzeugt, die als 'Postfix' die Sprache enthält, also z. B. $color_en
    }
}

// Beispiel Ausgabe italienisch:
echo $name_it . ', ' . $color_it . ': ' . $price_it . ' ' . $currency_it, PHP_EOL;

// Beispiel Ausgabe deutsch:
echo $name_de . ', ' . $color_de . ': ' . $price_de . ' ' . $currency_de, PHP_EOL;

# Optimierung - Ausgabe automatisch auf Basis der bevorzugten Sprache

$name = ${'name_' . $preferedLanguage};
$color = ${'color_' . $preferedLanguage};
$price = ${'price_' . $preferedLanguage};
$currency = ${'currency_' . $preferedLanguage};

echo $name . ', ' . $color . ': ' . $price . ' ' . $currency, PHP_EOL;