<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

    public function getVorname()
    {
        return $this->vorname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    # Änderung ggü. WBT - mit Settern

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
        return $this;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
        return $this;
    }

    public function beschreibe()
    {
        $text = 'Die Person heisst' . $this->getVorname() . ' ';
        $text .= $this->getNachname() . '!';
        return $text;
    }
}
