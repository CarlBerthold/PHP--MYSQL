<?php

class TestKlasse
{
    protected $text;

    public function __construct($eingabe)
    {
        $this->setText($eingabe);
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}

$test = new TestKlasse('Hallo Welt');
echo $test->getText(); //Gibt "Hallo Welt" aus

$test = new TestKlasse('Wie geht es euch denn so?');
echo $test->getText(); //Gibt "Wie geht es euch denn so?" aus
