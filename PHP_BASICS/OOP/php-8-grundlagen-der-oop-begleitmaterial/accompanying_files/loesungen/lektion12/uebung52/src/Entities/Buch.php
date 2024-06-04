<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

    protected static $db;

    public function __construct(array $daten = [])
    {
        $this->setDaten($daten);
    }

    public function setDaten(array $daten)
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

    public function getId()
    {
        return $this->id;
    }

    public function getTitel()
    {
        return $this->titel;
    }

    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    public function getPreis()
    {
        return $this->preis;
    }

    public function setPreis($preis)
    {
        $this->preis = $preis;
    }

    public function getBruttoPreis()
    {
        $bruttoPreis = $this->getPreis() * 1.07;

        return $bruttoPreis;
    }

    public function setBruttoPreis($bruttoPreis)
    {
        $this->setPreis($bruttoPreis / 1.07);
    }
    
    /* **** Active Record **** */

    public static function verbindeZuDb(PDO $db)
    {
        self::$db = $db;
    }

    public static function findeAlle()
    {
        $sql = 'SELECT * FROM buecher';
        $abfrage = self::$db->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Buch');

        return $abfrage->fetchAll();
    }

    public static function finde($id)
    {
        $sql = 'SELECT * FROM buecher WHERE id = ?';
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute([$id]);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Buch');

        return $abfrage->fetch();
    }

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

    public function loesche()
    {
        $sql = 'DELETE FROM buecher WHERE id = ?';
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute([$this->getId()]);

        $this->id = 0;
    }

    /* **** Geschuetzte Methoden **** */

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

    protected function update()
    {
        $sql = 'UPDATE buecher SET titel = :titel, preis = :preis' .
            ' WHERE id = :id';
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute(get_object_vars($this));
    }
}
