<?php

# die magische Methode __construct kann über Parameter verfügen

class Test
{
    public function __construct($parameter1, $parameter2)
    {
        var_dump($parameter1, $parameter2);
        echo 'ich bin die Methode ' . __METHOD__, PHP_EOL;
    }
}

# eine Instanz aus der Klasse Test erzeugen
## die Werte für die Parameter werden bei der Instanziierung als Argument in den runden Klammern nach dem Klassenbezeichner angegeben (analog einem Funktionsaufruf)
$obj = new Test('hello', 'world');