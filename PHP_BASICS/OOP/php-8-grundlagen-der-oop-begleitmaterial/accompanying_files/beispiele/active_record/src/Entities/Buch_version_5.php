<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $db;

    // die bekannten Methoden wurden hier aus Platzgruenden entfernt
    
    /* **** Active Record **** */

    protected function insert()
    {
        $sql = 'INSERT INTO buecher (titel, preis)' .
            ' VALUES (:titel, :preis)';
        $abfrage = self::$db->prepare($sql);

        $daten = get_object_vars($this); // ohne statische Attribute!
        unset($daten['id']);
        $abfrage->execute($daten);
        
        // setze die ID auf den von der DB generierten Wert
        $this->id = self::$db->lastInsertId();
    }
}
