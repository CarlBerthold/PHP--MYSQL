<?php

class Kategorie
{
    private $kategorie = 'Hosen';

    protected function gebeKategorieAus()
    {
        echo $this->kategorie . PHP_EOL;
    }
    protected function gebeKategorie2Aus()
    {
        echo $this->kategorie . PHP_EOL;
    }
}

class Bekleidung extends Kategorie
{
    protected $art = 'Jeans';
    protected $groesse = '34/36';

    public function gebeAus()
    {
        echo $this->art . ' ' . $this->groesse . ' ' . $this->kategorie . PHP_EOL;
    }
    public function gebeKategorieAus()
    {
        echo $this->kategorie . PHP_EOL;
    }
    public function gebeKategorieElternklasseAus()
    {
        echo $this->gebeKategorie2Aus() . PHP_EOL;
    }
}

$hose = new Bekleidung();
// $hose->gebeAus(); // funktioniert nicht
$hose->gebeKategorieElternklasseAus(); 
