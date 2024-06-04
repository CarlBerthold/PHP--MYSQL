<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $db;

    // die bekannten Methoden wurden hier aus Platzgruenden entfernt
    
    /* **** Active Record **** */
    
    public static function finde($id)
    {
        $sql = 'SELECT * FROM buecher WHERE id = ?';
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute([$id]);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Buch');
        
        return $abfrage->fetch();
    }
}
