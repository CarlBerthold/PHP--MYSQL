<?php 
  
class Buch 
{ 
    protected $titel = ''; 
    protected $preis = 0; 
    protected $ebook = false; 
  
    public function __construct(array $daten = []) 
    { 
        if ($daten) {  
            foreach ($daten as $key => $value) { 
                $setterName = 'set' . ucfirst($key);  
                // zusammensetzen (konkatenieren) des Werts von $settername  
                // nach Namenskonvention von Settern 
                if (method_exists($this, $setterName)) {  
                // pruefen, ob ein passender Setter mit $settername existiert 
                    $this->$setterName($value); // Setteraufruf  
                } 
            } 
        } 
    } 
  
    public function __toString() 
    { 
        return $this->titel . ' ' . $this->preis . ' €' .  
        (($this->ebook) ? ' (Ebook)' : ' (gedruckte Version)'); 
    } 
  
    public function setTitel($titel) { $this->titel = $titel; } 
  
    public function setPreis($preis) { $this->preis = $preis; } 
  
    public function setEbook($ebook) { $this->ebook = $ebook; } 
} 
  
$perAnhalter = new Buch([ 
    'titel' => 'Per Anhalter durch die Galaxy', 
    'preis' => 11.99, 
    'ebook' => true, 
]); 
echo $perAnhalter; 
//=> Per Anhalter durch die Galaxy 11.99 € (Ebook)
