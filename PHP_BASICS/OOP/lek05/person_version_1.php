<?php

class Person
{
    protected $vorname = 'Oli';
    protected $nachname = 'Vogt';

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
        $text = 'Die Person heisst' . $this->vorname . ' ';
        $text.= $this->nachname . '!';
        return $text;
    }
}

$noname = new Person();

echo $noname->getVorname(), PHP_EOL;
echo $noname->getNachname(), PHP_EOL;

echo $noname->beschreibe();
