<?php

class Buch
{
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    public function __construct(array $daten = [])
    {
        $this->setDaten($daten);
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
