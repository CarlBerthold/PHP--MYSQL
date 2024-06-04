<?php

class Fussball
{
    protected $farbe = 'weiss';
    protected $durchmesser = '30';

    public function getFarbe()
    {
        return $this->farbe;
    }

    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;
    }

    public function getDurchmesser()
    {
        return $this->durchmesser;
    }

    public function setDurchmesser($durchmesser)
    {
        $this->durchmesser = $durchmesser;
    }
}
