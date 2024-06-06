<?php

class Adresse
{
    public function getClassName()
    {
        return __CLASS__;
    }
}

class Person
{
    public function setAdresse(Adresse $adresse)
    {
        echo $adresse->getClassName();
    }
}

$hans = new Person();
$adresse = new Adresse();
$hans->setAdresse($adresse);
// $hans->setAdresse('Hinter dem Mond'); // => Fatal error: Uncaught TypeError: Person::setAdresse(): Argument #1 ($adresse) must be of type Adresse, string given, called in ...
