<?php

class Kategorie
{
    protected $kategorie = 'Hosen';

    final protected function gebeKategorieAus()
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
        echo 'Die Kategorie lautet: ' . $this->kategorie . PHP_EOL;
    }
}

$hose = new Bekleidung();
$hose->gebeAus(); 
$hose->gebeKategorieAus(); 
// funktioniert nicht
