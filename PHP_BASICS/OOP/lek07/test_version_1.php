<?php

class TestKlasse
{
    public $text;

    public function __construct()
    {
        $this->text = 'Hallo Welt';
    }
}

$test = new TestKlasse();
echo $test->text; //Gibt "Hallo Welt" aus
