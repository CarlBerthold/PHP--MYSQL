<?php
class Computer
{
    public $rechner = 'PC';
    public static function starten($medium)
    {
        return 'Der Computer wurde von ' . $medium . ' gestartet';
    }
}

echo Computer::rechner;
