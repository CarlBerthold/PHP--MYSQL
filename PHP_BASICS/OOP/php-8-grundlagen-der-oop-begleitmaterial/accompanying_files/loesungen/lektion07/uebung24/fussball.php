<?php

class Fussball
{
    protected $farbe = 'weiss';
    protected $durchmesser = '30';

    public function __construct($farbe, $durchmesser)
    {
        $this->setFarbe($farbe);
        $this->setDurchmesser($durchmesser);
    }

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

    public function beschreibeFussball()
    {
        $text = 'Dieser Fussball ist ' . $this->getFarbe();
        $text .= ' und hat einen Durchmesser von ' . $this->getDurchmesser() . ' cm.';
        return $text;
    }
}
