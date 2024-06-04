<?php

class Person
{
    protected $name = '';
    protected $email = '';
    protected $adresse;

    public function __construct()
    {
        $this->setAdresse(new Adresse());
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse(Adresse $adresse)
    {
        $this->adresse = $adresse;
    }

    public function getStrasse()
    {
        return $this->adresse->getStrasse();
    }

    public function setStrasse($strasse)
    {
        $this->adresse->setStrasse($strasse);
    }

    public function getHausnummer()
    {
        return $this->adresse->getHausnummer();
    }

    public function setHausnummer($hausnummer)
    {
        $this->adresse->setHausnummer($hausnummer);
    }

    public function getPlz()
    {
        return $this->adresse->getPlz();
    }

    public function setPlz($plz)
    {
        $this->adresse->setPlz($plz);
    }

    public function getOrt()
    {
        return $this->adresse->getOrt();
    }

    public function setOrt($ort)
    {
        $this->adresse->setOrt($ort);
    }
}
