<?php

class Person
{
    public static function findeAlle()
    {
        // Hier werden alle Datensaetze (z.B. per SELECT) zurueckgegeben
    }
    
    public static function finde($id)
    {
        $daten = self::findeAlle(); // oder direkt ein SELECT mit der ID
        // Hier wird der einzelne Datensatz zurueckgegeben
    }
}
