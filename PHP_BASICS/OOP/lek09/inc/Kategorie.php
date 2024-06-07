<?php

class Kategorie
{
    public $kategorie = 'Hosen';

    public function gebeKategorieAus()
    {
        echo $this->kategorie . PHP_EOL;
    }
}
?>