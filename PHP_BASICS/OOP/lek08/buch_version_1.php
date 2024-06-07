<?php

class Autor
{
    protected $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Buch
{
    protected $titel = '';
    protected $autor new Autor(); // kein Standardwert

    public function getTitel()
    {
        return $this->titel;
    }

    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    public function getAutorName()
    {
        return $this->autor->getName();
    }

    public function setAutorName($name)
    {
        $this->autor->setName($name);
    }
}

$buch = new Buch();
$buch->setTitel('Der Dativ ist dem Genitiv sein Tod');
$buch->setAutorName('Bastian Sick'); // Erzeugt eine Fehlermeldung
