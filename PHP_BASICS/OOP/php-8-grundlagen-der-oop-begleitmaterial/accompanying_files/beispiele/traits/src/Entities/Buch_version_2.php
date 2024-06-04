<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $table = 'buecher';

    use ActiveRecordable, Findable;

    public function __construct(array $daten = [])
    {
        $this->setDaten($daten);
    }

    // die Getter/Setter wurden hier aus Platzgruenden entfernt
}
