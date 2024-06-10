<?php

class Laptop extends Computer
{
    const RECHNER = 'Laptop';
    const DISPLAY = "15 Zoll";
    const MEDIUM = 'SSD';
    public function gebStatusAus()
    {
        $ausgabe = $this->starten(self::MEDIUM) . PHP_EOL;
        $ausgabe .= 'Das ' . self::RECHNER . ' hat eine Displaygröße von ' . self::DISPLAY . PHP_EOL;

        return $ausgabe;
    }
    public static function hello()
    {
        echo 'Der ' . self::RECHNER . ' sag hallo zu Dir!' . PHP_EOL;
    }
}
