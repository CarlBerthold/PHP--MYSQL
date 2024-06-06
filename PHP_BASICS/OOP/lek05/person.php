<?php

class Person
{
    protected $vorname = 'Oli';
    protected $nachname = 'Vogt';

    public function getVorname()
    {
        return strtoupper($this->vorname);
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function beschreibe()
    {
        $text = 'Die Person heisst' . $this->getVorname() . ' ';
        $text .= $this->getNachname() . '!';
        return $text;
    }
}


$noname = new Person();

echo $noname->getVorname(), PHP_EOL;
echo $noname->getNachname(), PHP_EOL;

echo $noname->beschreibe();
