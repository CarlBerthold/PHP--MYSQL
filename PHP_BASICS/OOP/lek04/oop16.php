<?php

# Sichbarbeit von Attributen und Methoden

class MyClass
{
    public $attr1 = 'attr1';
    protected $attr2 = 'attr2';
    private $attr3 = 'attr3';

    // public function publicMethod()
    function publicMethod() // eine Methodendefinition ohne Sichtbarkeit bewirkt, dass die Methode automatisch public wird -> aber schlechter Stil
    {
        echo 'ich bin öffenlich', PHP_EOL;
    }

    protected function protectedMethod()
    {
        echo 'ich bin geschützt', PHP_EOL;
    }

    private function privateMethod()
    {
        echo 'ich bin privat und geschützt', PHP_EOL;
    }

    public function printAttributes()
    {
        var_dump($this->attr1, $this->attr2, $this->attr3);
    }

    public function callClassMethods()
    {
        $this->publicMethod();
        $this->protectedMethod();
        $this->privateMethod();
    }

    # Setter und Getter für die geschützten Attribute
    public function getAttr2()
    {
        return $this->attr2;
    }

    public function setAttr2($value)
    {
        $this->attr2 = $value;
    }

    public function getAttr3()
    {
        return $this->attr3;
    }

    public function setAttr3($value)
    {
        $this->attr3 = $value;
    }
}

$myObj = new MyClass();

# Zugriff auf ein öffentliches Attribut
## lesend

echo $myObj->attr1, PHP_EOL;
$myObj->attr1 = 'neuer Wert';

var_dump($myObj);

# Zugriff auf ein protected geschütztes Attribut
## lesend

// echo $myObj->attr2, PHP_EOL; // => PHP Fatal error:  Uncaught Error: Cannot access protected property MyClass::$attr2 in ...
// $myObj->attr2 = 'neuer Wert'; // => PHP Fatal error:  Uncaught Error: Cannot access protected property MyClass::$attr2 in ...

# Zugriff auf ein private geschützes Attribut
## lesend

// echo $myObj->attr3, PHP_EOL; // => PHP Fatal error:  Uncaught Error: Cannot access private property MyClass::$attr3 in ...
// $myObj->attr3 = 'neuer Wert'; // => PHP Fatal error:  Uncaught Error: Cannot access private property MyClass::$attr3 in ...

# Zugriff auf eine öffentliche Methode

$myObj->publicMethod();

# Zugriff auf eine protected geschützte Methode

// $myObj->protectedMethod(); // => PHP Fatal error:  Uncaught Error: Call to protected method MyClass::protectedMethod() from global scope in ...

# Zugriff auf eine private geschützte Methode

// $myObj->privateMethod(); // => atal error: Uncaught Error: Call to private method MyClass::privateMethod() from global scope in ...

# Zugriff innerhalb der Klasse auf alle Attribute über eine öffentliche Methode, also auch die geschützten

$myObj->printAttributes();

# Aufruf aller Methoden innerhalb der Klasse über eine öffentliche Methode, also auch die geschützten

$myObj->callClassMethods();

## Setter und Getter für die geschützten Attribute testen

$myObj->setAttr2('neuer Wert für attr2');
$myObj->setAttr3('neuer Wert für attr3');

echo $myObj->getAttr2(), PHP_EOL;
echo $myObj->getAttr3(), PHP_EOL;