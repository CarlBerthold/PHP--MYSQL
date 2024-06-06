<?php

class Person
{
    protected $vorname = '';
    protected $nachname = '';

    # magische Methode __construct

    public function __construct(array $daten = [])
    {
        // prüfen ob Daten übergeben wurden
        if ($daten) { 
            $this->setAttributes($daten);
        }
    }

    # Optimierung - virtuelles Attribut für alle Attribute
    public function setAttributes(array $daten = [])
    {
        // prüfen ob Daten übergeben wurden
        if ($daten) { // alternativ if(!empty($daten) {)
            // mittels foreach durch das Datenarray iterieren
            foreach ($daten as $key => $value) {
                $setterName = 'set' . ucfirst($key); // Beispiel bei key 'vorname' => 'setVorname'
                if (method_exists($this, $setterName)) {
                    $this->$setterName($value); // Stichwort: Variablen-Funktionen
                }
            }
        }
    }

    # Aufgabe: einen Getter für das virtuelle Attribut 'attributes' entwicklen, der alle Attributswerte als assoziativer Array zurückgibt


    public function getAttributes()
    {
       $data = [
            'vorname' => $this->getVorname(),
            'nachname' => $this->getNachname(),
       ];
       return $data;
    }

    # magische Method __toString
    public function __toString()
    {
        // return 'ich bin die magische Method __toString';
        return $this->vorname . ' ' . $this->nachname;
    }

    public function getVorname()
    {
        return $this->vorname;
    }

    public function getNachname()
    {
        return $this->nachname;
    }

    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }
}
