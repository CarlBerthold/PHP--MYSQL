<?php

require_once __DIR__ . '/Computer.php';

class Computer
{
    protected $rechner = 'PC';
    const RECHNER = 'Rechner';
    public function __construct($medium)
    {
        echo 'Der ' . self::RECHNER . ' wurde von ' . $medium . ' gestartet' . PHP_EOL;
    }
    protected function starten($medium = '')
    {
        return 'Der ' . $this->rechner . ' wurde von ' . $medium . ' gestartet.';
    }
    public static function hello()
    {
        echo 'Der Computer sagt hallo zu Dir!' . PHP_EOL;
    }
}
