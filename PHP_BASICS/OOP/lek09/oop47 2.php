<?php
class Computer
{
    public const RECHNER = 'PC';

    public static $uhrzeit = "8:30 Uhr";

    public static function starten($medium)
    {
        return 'Der ' . self::RECHNER . ' wurde von ' . $medium . ' um ' . self::$uhrzeit . 'gestartet'; // $this->uhrzeit;
    }
}

echo Computer::RECHNER . PHP_EOL;
echo Computer::starten('floppy disk') . PHP_EOL;

// echo Computer::$uhrzeit;
