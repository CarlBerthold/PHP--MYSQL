<?php 
  
class Buch 
{ 
    protected $titel = ''; 
    protected $preis = 0; 
    protected $ebook = false; 
  
    public function __construct(array $daten = []) 
    { 
        if ($daten) {  
            $this->setDaten($daten); 
        } 
    } 
  
    public function setDaten(array $daten = []) 
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
  
// ... Rest wie im Beispiel zuvor
} 
  
$perAnhalter = new Buch([ 
    'titel' => 'Per Anhalter durch die Galaxy', 
    'preis' => 11.99, 
    'ebook' => true, 
]); 
echo $perAnhalter; 
//=> Per Anhalter durch die Galaxy 11.99 € (Ebook)