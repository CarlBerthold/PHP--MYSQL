<?php 
  
class Buch 
{ 
    protected $titel = ''; 
    protected $preis = 0; 
    protected $ebook = false; 
  
    public function __construct(array $daten = [])  
    //Typprüfung mittelts Typdeklaration 
    { 
        if ($daten) {  
        //Prüfen ob Parameter $daten vorhanden 
            foreach ($daten as $key => $value) { 
                switch (true) {  
                    //Prüfen ob Key-Value-Paar übergeben und  
                    //Aufruf des jeweiligen Setters 
                    case ($key == 'titel'): 
                        $this->setTitel($value); #jetzt mit Setter 
                        break; 
                    case ($key == 'preis'): 
                        $this->setPreis($value); #jetzt mit Setter 
                        break; 
                    case ($key == 'ebook'): 
                        $this->setEbook($value); #jetzt mit Setter 
                        break; 
                } 
            } 
        } 
    } 
  
    public function __toString() 
    { 
        return $this->titel . ' ' . $this->preis . ' €' .  
        (($this->ebook) ? ' (Ebook)' : ' (gedruckte Version)'); 
    } 
  
    public function setTitel($titel) 
    { 
        $this->titel = $titel; 
    }

    public function setPreis($preis) 
    { 
        $this->preis = $preis; 
    }

    public function setEbook($ebook) 
    { 
        $this->ebook = $ebook; 
    }
}

$perAnhalter = new Buch([ 
    'titel' => 'Per Anhalter durch die Galaxy', 
    'preis' => 11.99, 
    'ebook' => true, 
]); 
echo $perAnhalter; 
//=> Per Anhalter durch die Galaxy 11.99 € (Ebook)