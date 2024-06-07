<?php

class Kategorie
{
    public $kategorie = 'Hosen';

    public function gebeAus()
    {
        echo 'Elternklasse: ' . $this->kategorie . PHP_EOL;
    }
}

class Bekleidung extends Kategorie
{
    public $art = 'Jeans';
    public $groesse = '34/36';
    public $kategorie = 'Beinbekleidung';

    public function gebeAus()
    {
        echo 'Kindklasse: ' . $this->art . ' ' . $this->groesse . ' ' . $this->kategorie . PHP_EOL;
    }
}

$hose = new Bekleidung();

echo '--1--' . PHP_EOL;

$hose->gebeAus();
echo $hose->kategorie . PHP_EOL;

echo '--2--' . PHP_EOL;

$kategorieObject = new Kategorie();
$kategorieObject->gebeAus();
echo $kategorieObject->kategorie . PHP_EOL;

echo '--3--' . PHP_EOL;

$hose2 = new Bekleidung();

$hose2->gebeAus();
echo $hose2->kategorie . PHP_EOL;

echo '--4--' . PHP_EOL;

$hose2->kategorie = 'Buxe';
$hose2->gebeAus();
echo $hose2->kategorie . PHP_EOL;

echo '--5--' . PHP_EOL;

$kategorieObject->gebeAus();

echo '--6--' . PHP_EOL;

$hose->gebeAus();
