<?php

# Klassenkonstante ::class

var_dump(Person::class);

class Test
{
    public function getClassName()
    {
        // return Test::class; // mittels Klassenkonstante
        // return self::class; // mittels Klassenkonstante
        return __CLASS__; // mittels magischer Konstanten __CLASS__
    }
}

$test = new Test();
echo 'Die Klasse der Objektes $test heißt: ' . $test->getClassName(), PHP_EOL;

echo 'Sie Klasse der Objektes $test heißt: ' . get_class($test), PHP_EOL;

## Objekte überprüfen

### prüfen, ob die Variable Test ein Objekt ist

// $test = 'string';
// $test = new stdClass();

if (is_object($test)) {
    echo '$test ist ein Objekt', PHP_EOL;
    // echo $test->getClassName(); // die Prüfung auf den Datentyp Object gibt uns keine Information darüber, welche Methode auf das Objekt aufrufbar sind
} else {
    echo '$test ist kein Objekt', PHP_EOL;
}

### prüfen, ob die Variable Test aus der Klasse 'Test' instanziiert wurde

if (is_object($test) && get_class($test) === 'Test') {
    echo '$test ist eine Instanz der Klasse Test', PHP_EOL;
    echo $test->getClassName();
} else {
    echo '$test ist keine Instanz der Klasse Test', PHP_EOL;
}

### alternativ mittels instanceof-Operator

if ($test instanceof Test) {
    echo '$test ist eine Instanz der Klasse Test', PHP_EOL;
    echo $test->getClassName();
} else {
    echo '$test ist keine Instanz der Klasse Test', PHP_EOL;
}

// Klassenbezeichner als Stringwert einer Variablen

$className = 'Test';
if ($test instanceof $className) {
    echo '$test ist eine Instanz der Klasse Test', PHP_EOL;
    echo $test->getClassName();
} else {
    echo '$test ist keine Instanz der Klasse Test', PHP_EOL;
}

// Klasse als String - geht doch, der Klassenbezeichner muss allerdings in runden Klammern geschrieben werden

if ($test instanceof ('Test')) {
    echo '$test ist eine Instanz der Klasse Test', PHP_EOL;
    echo $test->getClassName();
} else {
    echo '$test ist keine Instanz der Klasse Test', PHP_EOL;
}

# alternative mittels is_a - Prüft, ob ein Objekt vom angegebenen Typ oder untergeordneten Typ ist

if (is_a($test, 'Test')) {
    echo '$test ist eine Instanz der Klasse Test', PHP_EOL;
    echo $test->getClassName();
} else {
    echo '$test ist keine Instanz der Klasse Test', PHP_EOL;
}