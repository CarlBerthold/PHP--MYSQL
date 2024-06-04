<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

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

    public function getVorname()
    {
        return $this->vorname;
    }

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }
}
