<?php

# die magische Methode __construct kann über Parameter verfügen

class Test
{
    public $attribute1;
    protected $attribute2;

    public function __construct($parameter1, $parameter2)
    {
        $this->attribute1 = $parameter1;
        $this->attribute2 = $parameter2;
    }
}

# eine Instanz aus der Klasse Test erzeugen
## die Werte für die Parameter werden bei der Instanziierung als Argument in den runden Klammern nach dem Klassenbezeichner angegeben (analog einem Funktionsaufruf)
$obj = new Test('hello', 'world');

var_dump($obj);

# auch der Constructor ist eine normale Methode

$obj->__construct('Oli', 42);

var_dump($obj);