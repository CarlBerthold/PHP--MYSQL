<?php

// Fehlermeldungen ausschalten
// error_reporting(0);

# Was ist ein Objekt in PHP?

$object = new stdClass(); // stdClass - Eine generische leere Klasse mit dynamischen Eigenschaften. 

echo gettype($object), PHP_EOL; // => object - ist ein Datentyp
var_dump($object);

# Attribute
## hinzufügen - schreibender Zugriff auf ein Objekt
// seit PHP 8 - nur noch bei stdClass, bei allen anderen ist das deprecated

$object->attribute = 42; // damit wird in dem Objekt der stdClass ein Attribut erzeugt

## weitere Information über ein Objekt abfragen

var_dump($object);

## ein Attribut abfragen

var_dump($object->attribute);

## einen Attributswert ändern

$object->attribute = 'hallo welt';
var_dump($object, $object->attribute);

## kann ein Attribut gelöscht werden?

unset($object->attribute);

var_dump($object);

// Vorsicht: geht nur bei stdClass

## andere Datentypen in Objekte umwandeln

$int = 42;

$intObject = (object) $int;

var_dump($intObject);

$string = 'Oli';

$stringObject = (object) $string;

var_dump($stringObject);

$user = [
    'firstname' => 'Oli',
    'lastname' => 'Vogt',
    'email' => 'oli@home',
    'age' => 45,
];

$userObject = (object) $user;

var_dump($userObject);

echo $userObject->firstname, PHP_EOL;

// was passiert bei einem numerisch indizierten Array

$numbers = [2, 4, 5, 7, 9];

$numbersObject = (object) $numbers;

var_dump($numbersObject);

// was passiert bei einem mehrdimensionalen assoziatives Array

$users = [
    'oli' => $user,
    'hans' => [
        'firstname' => 'Hans',
        'lastname' => 'Wurst',
        'email' => 'hans@wurst.de',
        'age' => 66,
    ],
    'erika' => [
        'firstname' => 'Erika',
        'lastname' => 'Wurst',
        'email' => 'erika@wurst.de',
        'age' => 66,
    ],
];

$usersObject = (object) $users;

var_dump($usersObject);

## umgekehrt - ein Objekt in ein Array casten

$array = (array) $userObject;

var_dump($array);

# Datentyp object prüfen

if(is_object($usersObject)) {
    echo 'ist ein Objekt', PHP_EOL;
} else {
    echo 'ist kein Objekt', PHP_EOL;
}

## eigene Klassen definieren

class User {

}

### ein Objekt aus der Klasse User instanziieren
// ein Klasse ohne Attribute und Methoden

$user = new User();

var_dump($user);

## ein Attribut hinzufügen

$user->firstname = 'Donald'; // Deprecated: Creation of dynamic property User::$firstname is deprecated in ...

var_dump($user);

// ab PHP 8 ist das dynamische Hinzufügen von Attribute deprecated und sollte möglichst vermieden werden

## Gleichheit und Identität von Objekten

$user1 = new User();
$user2 = new User();
$user3 = $user1;
$user4 = new stdClass();

var_dump($user1 == $user2); // => bool(true)
var_dump($user1 == $user3); // => bool(true)
var_dump($user1 == $user4); // => bool(false)

var_dump($user1 === $user2); // => bool(false)
var_dump($user1 === $user3); // => bool(true)
var_dump($user1 === $user4); // => bool(false)

## Klasse mit Attributen definieren

class Corpus
{
    public $edges = 0; // initialisieren
    public $volume = 0;
    public $surface; // nur deklarieren
}

$cube = new Corpus();

var_dump($cube);

### Attributswerte ändern - schreibender Zugriff

$cube->edges = 12;
$cube->volume = 16;
$cube->surface = ((16 ** (1/3)) ** 2) * 6;

var_dump($cube);

### lesender Zugriff

$volume = $cube->volume;

var_dump($volume);

// kann ein 'definiertes' Attribut gelöscht werden

unset($cube->edges);

var_dump($cube);

var_dump(new Corpus());

## Methoden definieren

class Pasta
{
    public $name = '';
    public $nutri = '';
    public $price; // $price = NULL;
    public $amount = 0;

    public function describe()
    {
        $description = 'Ein leckers italienisches Nudelgericht mit ...';
        return $description;
    }
}

$bolo = new Pasta();

var_dump($bolo);

### eine Methode aufrufen

echo $bolo->describe(), PHP_EOL;

// echo describe(); // => PHP Fatal error:  Uncaught Error: Call to undefined function describe() in ...

### eine Methode ist eine an eine Klasse gebundene Funktion

## Pseudovariable $this

class MyClass
{
    public $attribut1 = 'attr1';
    public $attribut2 = 'attr2';

    public function printAttribute1()
    {
        echo $this->attribut1, PHP_EOL;
    }

    public function returnThis()
    {
        return $this;
    }
}

$myClass = new MyClass();

$myClass->printAttribute1();

var_dump($myClass->returnThis());
var_dump($myClass);
var_dump($myClass === $myClass->returnThis());

## die Pseudovariable $this ist eine Referenz auf das Objekt, dass zur Laufzeit aus der Klasse instanziiert wird und wird verwendet um bereits in der Klassendefinition auf Attribute und/oder Methode derselben Klasse zuzugreifen



