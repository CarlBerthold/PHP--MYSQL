<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

    function getVorname()
    {
        return $this->vorname;
    }

    function getNachname()
    {
        return $this->nachname;
    }

    function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }
}
