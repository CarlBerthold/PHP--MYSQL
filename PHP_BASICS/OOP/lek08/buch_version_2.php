<?php

require_once 'autor.php'; //Autor wurde ausgelagert

class Buch
{
    protected $titel = '';
    protected $autor; // kein Standardwert

    public function __construct()
    {
        $this->autor = new Autor();
    }

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
$buch->setAutorName('Bastian Sick');

var_dump($buch);
