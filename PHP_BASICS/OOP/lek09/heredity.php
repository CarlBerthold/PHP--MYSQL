<?php

class Kategorie
{
    public $kategorie = 'Hosen';

    public function gebeKategorieAus()
    {
        echo $this->kategorie . PHP_EOL;
    }
}

class Bekleidung extends Kategorie
{
    public $art = 'Jeans';
    public $groesse = '34/36';

    public function gebeAus()
    {
        echo $this->art . ' ' . $this->groesse . PHP_EOL;
    }
}

$hose = new Bekleidung();
/* var_dump($hose);
exit; */

$hose->gebeAus();
$hose->gebeKategorieAus(); // funktioniert, da die Kindklasse 'alle' Attribute und Methoden der Elternklasse erbt

$kategorieObject = new Kategorie();
$kategorieObject->gebeKategorieAus();

$kategorieObject = new Kategorie();
$kategorieObject->gebeAus(); // Now this will work as the Kategorie class inherits the gebeAus() method from the Bekleidung class
var_dump($kategorieObject);

exit;


