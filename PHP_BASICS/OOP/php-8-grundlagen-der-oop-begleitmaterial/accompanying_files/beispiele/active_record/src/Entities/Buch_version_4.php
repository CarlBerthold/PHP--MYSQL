<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $db;

    // die bekannten Methoden wurden hier aus Platzgruenden entfernt
    
    /* **** Active Record **** */

    public function speichere()
    {
        if ($this->getId() > 0) {
            // bereits vorhanden
            $this->update();
        } else {
            // neu
            $this->insert();
        }
    }

    protected function insert()
    {
        // hier wird ein INSERT durchgeführt
    }

    protected function update()
    {
        // hier wird ein UPDATE durchgeführt
    }
}
