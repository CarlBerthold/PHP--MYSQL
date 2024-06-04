<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $db;

    // die bekannten Methoden wurden hier aus Platzgruenden entfernt
    
    /* **** Active Record **** */
    
    public static function findeAlle()
    {
        $sql = 'SELECT * FROM buecher';
        $abfrage = self::$db->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Buch');
        
        return $abfrage->fetchAll();
    }
}
