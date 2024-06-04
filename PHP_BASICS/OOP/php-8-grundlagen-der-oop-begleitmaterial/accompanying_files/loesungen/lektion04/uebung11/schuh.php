<?php

class Schuh
{
    protected $farbe = 'schwarz';
    protected $groesse = 8;
    protected $material = 'Leder';
    protected $typ = 'Halbschuh';

    public function getFarbe()
    {
        return $this->farbe;
    }

    public function getGroesse()
    {
        return $this->groesse;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getTyp()
    {
        return $this->typ;
    }
}
