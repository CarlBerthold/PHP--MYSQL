<?php

class Fussball
{
    protected $farbe = 'weiss';
    protected $durchmesser = '30';

    public function __construct(array $daten = [])
    {
        $this->setDaten($daten);
    }

    public function __toString()
    {
        $text = 'Dieser Fussball ist ' . $this->getFarbe();
        $text .= ' und hat einen Durchmesser von ' . $this->getDurchmesser() . ' cm.';
        return $text;
    }

    public function setDaten(array $daten)
    {
        // wenn $daten nicht leer ist, rufe die passenden Setter auf
        if ($daten) {
            foreach ($daten as $k => $v) {
                $setterName = 'set' . ucfirst($k);
                // pruefe ob ein passender Setter existiert
                if (method_exists($this, $setterName)) {
                    $this->$setterName($v); // Setteraufruf
                }
            }
        }
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
}
