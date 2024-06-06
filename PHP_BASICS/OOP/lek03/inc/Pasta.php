<?php

class Pasta {
    public $name = '';
    public $nutri = '';
    public $price; // $price = NULL;
    public $amount = 0;
    public $description = '';

    public function order($amount = 1)
    {
        $this->amount = $amount;
    }

    public function pay()
    {
        $total = $this->amount * $this->price;
        return $total . ' Euro';
    }
}

$bolo = new Pasta();

var_dump($bolo);

// Objekt 'konfigurieren'

$bolo->name = 'Tagiatelle Bolognese';
$bolo->nutri = 'A';
$bolo->price = 25;
$bolo->description = 'Unser Bestseller - leckere Bio-Nudel mit Hackfleichtomatensoße von glücklichen Rindern....';

var_dump($bolo);
// Bestellung aufnehmen

$bolo->order(17);
var_dump($bolo);

// Bezahlung

echo $bolo->pay(), PHP_EOL;


## weiteres Gericht

$carbonara = new Pasta();

var_dump($carbonara);

$carbonara->name = 'Spaghetti Carbonara';
$carbonara->nutri = 'B';
$carbonara->price = 24.99;
$carbonara->description = 'leckeres Spaghetti-Gericht...';
