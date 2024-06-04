<?php

class Beispiel
{
}

class Debug
{
    public function beschreibe(object $object)
    {
        return get_class($object);
    }
}

$debug = new Debug();

echo $debug->beschreibe(new stdClass()); // stdClass
echo $debug->beschreibe(new Beispiel()); // Beispiel
