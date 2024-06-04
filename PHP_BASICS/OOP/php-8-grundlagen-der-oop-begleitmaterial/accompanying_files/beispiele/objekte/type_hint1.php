<?php

class Adresse
{
}

class Person
{
    public function setAdresse(Adresse $adresse)
    {
        //tuewas mit dem Adress-Objekt
    }
}

$hans = new Person();
$adresse = new Adresse();
$hans->setAdresse($adresse);
$hans->setAdresse('Hinter dem Mond'); //erzeugt Fehler
