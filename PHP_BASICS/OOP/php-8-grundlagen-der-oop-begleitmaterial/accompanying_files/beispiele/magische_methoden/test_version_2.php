<?php

class TestKlasse
{
    public $text;

    public function __construct()
    {
        $this->text = 'Hallo Welt';
    }
}

$test = new TestKlasse('Hallo Leute!');
echo $test->text; //Gibt immer noch "Hallo Welt" aus
