<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

    public function __construct(array $daten = [])
    {
        if ($daten) {
            $this->setVorname($daten['vorname']);
            $this->setNachname($daten['nachname']);
        }
    }

    public function __toString()
    {
        return $this->getVorname() . ' ' . $this->getNachname();
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
