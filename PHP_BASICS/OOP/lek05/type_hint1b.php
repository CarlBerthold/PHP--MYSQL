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
    public function setAdresse($adresse)
    {
        if($adresse instanceof Adresse) {
            echo $adresse->getClassName();
        } else {
            echo 'das Objekt ist keine Instanz der Klasse Adresse';
        }
    }
}

$hans = new Person();
$adresse = new Adresse();
$hans->setAdresse($adresse);
$hans->setAdresse('Hinter dem Mond'); // => Fatal error: Uncaught TypeError: Person::setAdresse(): Argument #1 ($adresse) must be of type Adresse, string given, called in ...

$obj = new stdClass();
$hans->setAdresse($obj); 
