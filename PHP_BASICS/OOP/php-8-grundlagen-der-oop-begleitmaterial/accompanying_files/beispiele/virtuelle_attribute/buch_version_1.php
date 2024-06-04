<?php

class Buch
{
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    public function getTitel()
    {
        return $this->titel;
    }

    public function getPreis()
    {
        return $this->preis;
    }

    public function getBruttoPreis()
    {
        $bruttoPreis = $this->getPreis() * 1.07;
        return $bruttoPreis;
    }
}
