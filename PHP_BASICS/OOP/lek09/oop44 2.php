<?php
class Computer
{
    public static function starten($medium)
    {
        return 'Der Computer wurde von ' . $medium . ' gestartet';
    }
}

echo Computer::starten("DVD");