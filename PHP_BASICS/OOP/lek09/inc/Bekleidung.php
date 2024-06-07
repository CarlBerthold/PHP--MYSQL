<?php


class Bekleidung extends Kategorie
{
    public $art = 'Jeans';
    public $groesse = '34/36';

    public function gebeAus()
    {
        echo $this->art . ' ' . $this->groesse . PHP_EOL;
    }
}