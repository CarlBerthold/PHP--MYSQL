<?php
abstract class Computer
{
    abstract public function starten($param1, $param2, $param3);

    public function klasse()
    {
        return __CLASS__;
    }
    
}

class Laptop extends Computer
{
    public function starten($param1, $param2, $param3)
    {
        return "Laptop wurde gestartet";
    }
}

$laptop = new Laptop();
echo $laptop->starten() . PHP_EOL;
echo $laptop->klasse() . PHP_EOL;

//$computer = new Computer();
