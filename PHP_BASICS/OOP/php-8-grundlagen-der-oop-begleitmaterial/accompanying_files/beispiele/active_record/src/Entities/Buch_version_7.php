<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $db;

    // die bekannten Methoden wurden hier aus Platzgruenden entfernt
    
    /* **** Active Record **** */
    
    public function loesche()
    {
        $sql = 'DELETE FROM buecher WHERE id = ?';
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute([$this->getId()]);
        
        $this->id = 0;
    }
}
