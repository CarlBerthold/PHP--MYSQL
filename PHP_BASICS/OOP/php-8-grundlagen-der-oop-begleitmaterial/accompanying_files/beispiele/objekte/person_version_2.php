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

    public function beschreibe()
    {
        $text = 'Die Person heisst' . getVorname() . ' '; // erzeugt Fehler
        $text .= getNachname() . '!'; // noch ein Fehler
        return $text;
    }
}
