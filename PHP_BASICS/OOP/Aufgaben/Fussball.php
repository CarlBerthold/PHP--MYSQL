<?php


class Fussball 
{
    protected $farbe = 'weiss';
    protected $durchmesser = 22;

    /**
     * Get the value of durchmesser
     */ 
    public function getDurchmesser()
    {
        return $this->durchmesser;
    }

    /**
     * Set the value of durchmesser
     *
     * @return  self
     */ 
    public function setDurchmesser($durchmesser)
    {
        $this->durchmesser = $durchmesser;

        return $this;
    }

    /**
     * Get the value of farbe
     */ 
    public function getFarbe()
    {
        return $this->farbe;
    }

    /**
     * Set the value of farbe
     *
     * @return  self
     */ 
    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;

        return $this;
    }

    public function beschreibeFussball()
    {
        echo "Dieser Fussball ist {$this->getFarbe()} und hat einen Durchmesser von {$this->getDurchmesser()} cm.";
    }
}


$ball = new Fussball();
$ball->setFarbe('schwarz')->setDurchmesser(25);

if(!$ball instanceof Fussball) 
{
    $bschereibung = $ball->beschreibeFussball();
} else {
    echo 'Kein Fussball';
}
