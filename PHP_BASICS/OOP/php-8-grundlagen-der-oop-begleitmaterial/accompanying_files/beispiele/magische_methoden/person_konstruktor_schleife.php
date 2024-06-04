<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

    public function __construct(array $daten = [])
    {
        // wenn $daten nicht leer ist, rufe die passenden Setter auf
        if ($daten) {
            foreach ($daten as $k => $v) {
                $setterName = 'set' . ucfirst($k);
                // pruefe ob ein passender Setter existiert
                if (method_exists($this, $setterName)) {
                    $this->$setterName($v); // Setteraufruf
                }
            }
        }
    }

    // gekuerztes Beispiel ohne __toString und Getter/Setter
}
