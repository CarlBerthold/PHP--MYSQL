<?php


class Konto
{
    public $kontonummer = '0156789234';

    public $waehrung;

    public $glaeubiger;
    public $guthaben;

    public function functionTest(string $name) :string
    {
        return 'hello' . $name;
    }
}