<?php

class Cat
{
    public $name = '';

    public function giveLoudly()
    {
        return 'miau miau';
    }
}

class Dog
{
    public $name = '';

    public function giveLoudly()
    {
        return 'wuff wuff';
    }
}

class Dino
{
    public $name = '';

    public function giveLoudly()
    {
        return 'kreisch';
    }
}

# Instanzen aus den Klassen erzeugen

$tom = new Cat();
$tom->name = 'Tom';

$brutus = new Dog();
$brutus->name = 'Brutus';

$dino = new Dino();
$dino->name = 'Little Foot';

var_dump($tom, $brutus, $dino);

## Methode giveLoudly aufrufen

echo $tom->giveLoudly(), PHP_EOL;
echo $brutus->giveLoudly(), PHP_EOL;
echo $dino->giveLoudly(), PHP_EOL;
