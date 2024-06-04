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

    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;
    }

    public function getGroesse()
    {
        return $this->groesse;
    }

    public function setGroesse($groesse)
    {
        $this->groesse = $groesse;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getTyp()
    {
        return $this->typ;
    }

    public function setTyp($typ)
    {
        $this->typ = $typ;
    }
}
