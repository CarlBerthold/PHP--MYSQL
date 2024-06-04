<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';
    protected $geburtTimestamp = 0;

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

    public function getGeburtTimestamp()
    {
        return $this->geburtTimestamp;
    }

    public function setGeburtTimestamp($geburtTimestamp)
    {
        $this->geburtTimestamp = $geburtTimestamp;
    }

    public function getName()
    {
        return $this->getVorname() . ' ' . $this->getNachname();
    }

    public function setName($name)
    {
        [$vorname, $nachname] = explode(' ', $name);
        $this->setVorname($vorname);
        $this->setNachname($nachname);
    }

    public function getGeburtstag()
    {
        return strftime('%d.%m.', $this->getGeburtTimestamp());
    }
}
