<?php
class Computer
{
    protected $rechner = 'PC';
    public static function starten($medium)
    {
        return 'Der ' . $this->rechner . ' wurde von ' . $medium . ' gestartet';
    }
}

echo Computer::starten("DVD");