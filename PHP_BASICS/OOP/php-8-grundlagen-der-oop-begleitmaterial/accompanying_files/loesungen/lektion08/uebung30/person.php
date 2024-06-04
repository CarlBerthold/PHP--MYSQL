<?php

class Person
{
    protected $name = '';
    protected $email = '';
    protected $adresse;

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

    public function getPlz()
    {
        return $this->adresse->getPlz();
    }

    public function getOrt()
    {
        return $this->adresse->getOrt();
    }
}
