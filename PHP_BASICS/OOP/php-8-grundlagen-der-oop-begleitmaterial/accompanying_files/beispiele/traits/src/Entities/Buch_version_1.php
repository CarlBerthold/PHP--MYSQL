<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    use ActiveRecordable;

    public function __construct(array $daten = [])
    {
        $this->setDaten($daten);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitel()
    {
        return $this->titel;
    }

    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    public function getPreis()
    {
        return $this->preis;
    }

    public function setPreis($preis)
    {
        $this->preis = $preis;
    }

    public function getBruttoPreis()
    {
        $bruttoPreis = $this->getPreis() * 1.07;

        return $bruttoPreis;
    }

    public function setBruttoPreis($bruttoPreis)
    {
        $this->setPreis($bruttoPreis / 1.07);
    }
}
