<?php

class Test
{
    public function __construct()
    {
        echo 'ich bin die Methode ' . __METHOD__, PHP_EOL;
    }
}

# eine Instanz aus der Klasse Test erzeugen

$obj = new Test();