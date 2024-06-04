<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $db;

    // die bekannten Methoden wurden hier aus Platzgruenden entfernt
    
    /* **** Active Record **** */

    protected function update()
    {
        $sql = 'UPDATE buecher SET titel = :titel, preis = :preis' .
            ' WHERE id = :id';
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute(get_object_vars($this));
    }
}
