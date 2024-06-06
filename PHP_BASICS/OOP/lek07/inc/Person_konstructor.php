<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

    # magische Methode __construct
    // public function __construct($vorname, $nachname)
    # es können auch default-Werte für die Parameter angegeben werdn
    public function __construct($vorname = '', $nachname = '')
    {
        $this->setVorname($vorname);
        $this->setNachname($nachname);
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