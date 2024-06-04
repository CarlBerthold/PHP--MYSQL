<?php

class Buch
{
    protected $id = 0;
    protected $titel = '';
    protected $preis = 0; // Nettopreis

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

    public function setId($id)
    {
        $this->id = $id;
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

    public static function findeAlle()
    {
        $datei = 'daten/buecher.txt';

        if (file_exists($datei)) {
            $buecher = unserialize(file_get_contents($datei));
        }

        // Wenn die Datei nicht existiert oder das Unserialize fehlschlaegt
        if (!isset($buecher) || !is_array($buecher)) {
            $buecher = [];
        }

        return $buecher;
    }

    public static function finde($id)
    {
        $buecher = self::findeAlle();

        $buch = null;
        if (isset($buecher[$id])) {
            $buch = $buecher[$id];
        }

        return $buch;
    }

    public function speichere()
    {
        $buecher = self::findeAlle();

        $buecher[] = $this;

        file_put_contents('daten/buecher.txt', serialize($buecher));
    }
}
