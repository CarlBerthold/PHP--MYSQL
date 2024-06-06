<?php

class Test 
{

    // objectvariables
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';


    public function __construct()
    {
        $this->public = 'construct - public';
    }

    /**
     * Get the value of public
     */ 
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set the value of public
     *
     * @return  self
     */ 
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    public function setAttributes(array $data = [])
    {
        // prüfen ob Daten übergeben wurden
        if ($data) { // alternativ if(!empty($daten) {)
            // mittels foreach durch das Datenarray iterieren
            foreach ($data as $key => $value) {
                $setterName = 'set' . ucfirst($key); // Beispiel bei key 'vorname' => 'setVorname'
                if (method_exists($this, $setterName)) {
                    $this->$setterName($value); // Stichwort: Variablen-Funktionen
                }
            }
        }
    }

    public function getAttributes()
    {
/*         $data = [
            'public' => $this->getPublic(),
            'protected' => $this->getProtected(),
            'private' => $this->getPrivate(),
        ]; */
        /* return $data; */
        $daten = get_object_vars($this);

        return $daten;
    }

    /**
     * Get the value of protected
     */ 
    public function getProtected()
    {
        return $this->protected;
    }
    /**
     * Get the value of private
     */ 
    public function getPrivate()
    {
        return $this->private;
    }


    function help() 
    {
        $daten = get_object_vars($this);
        var_dump($daten);
    }

    /**
     * Set the value of protected
     *
     * @return  self
     */ 
    public function setProtected($protected)
    {
        $this->protected = $protected;

        return $this;
    }

    /**
     * Set the value of private
     *
     * @return  self
     */ 
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }
}


// if the class has no constructor we can remove the bracktes from the new class instantiation
$test = new Test;


/* echo $test->public, PHP_EOL;
echo $test->getProtected(), PHP_EOL;
echo $test->getPrivate(), PHP_EOL; */

$test->setAttributes(
    [
        'public' => 'öffentlich',
        'protected' => 'geschützt',
        'private' => 'privat',
    ]
);

var_dump($test);

$originalData = get_class_vars('Test');


$daten = $test->getAttributes();

var_dump($daten);