<?php

class Adresse
{
    protected $strasse = '';
    protected $plz = 0;
    protected $ort = '';

    public function getStrasse()
    {
        return $this->strasse;
    }

    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
    }

    public function getPlz()
    {
        return $this->plz;
    }

    public function setPlz($plz)
    {
        $this->plz = $plz;
    }

    public function getOrt()
    {
        return $this->ort;
    }

    public function setOrt($ort)
    {
        $this->ort = $ort;
    }
}
