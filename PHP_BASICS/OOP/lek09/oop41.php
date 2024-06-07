<?php
class Produkt
{
    public $titel;
    public $preis;

    public function gesamtpreis($stueckzahl)
    {
        $gesamtpreis = $this->preis * $stueckzahl;

        if ($stueckzahl >= 10) {
            $gesamtpreis = $gesamtpreis * 0.8;
        }
        return $gesamtpreis;
    }
}

class Buch extends Produkt
{
    public $autor;
}

class Film extends Produkt
{
    public $regisseur;
}

class CD extends Produkt
{
    public $band;
}

$buch = new Buch();
$buch->titel = "PHP lernen leicht gemacht";
$buch->preis = 20.00;
$menge = 5;
echo "$menge Bücher von <i>$buch->titel</i> je $buch->preis Euro kosten: " . $buch->gesamtpreis($menge) . " Euro" . PHP_EOL;

$film = new Film();
$film->titel = "Zurück in die Zukunft";
$film->preis = 10.00;
$menge = 15;
echo "$menge Filme von <i>$film->titel</i> je $film->preis Euro kosten: " . $film->gesamtpreis($menge) . " Euro" . PHP_EOL;
