<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

    # magische Methode __construct

    public function __construct(array $daten = [])
    {
        // prüfen ob Daten übergeben wurden
        if($daten) { // alternativ if(!empty($daten) {)
            $this->setVorname($daten[0]);
            $this->setNachname($daten[1]);
        }
    }

    # magische Method __toString
    public function __toString()
    {
        // return 'ich bin die magische Method __toString';
        return $this->vorname . ' ' . $this->nachname;
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }
}