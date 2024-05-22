<?php

declare(strict_types=1); // für Typdeklaration

# Funktiondefinition

function tuewas()
{
    echo 'hallo welt', PHP_EOL;
}

# Funktionaufruf

tuewas();

# Werte an eine Funktion übergeben

function sum($number1, $number2)
{
    echo $number1 + $number2, PHP_EOL;
}

sum(4, 6);

## optionale Parameter

function substract($number1, $number2 = 0)
{
    echo $number1 - $number2, PHP_EOL;
}

substract(7, 3);
substract(7);

## benannte Parameter (korrekterweise named arguments)
### die Reihenfolge der Argumente ist durch die Reihenfolge der Parameter bestimmt

function tuewas1($par1, $par2, $par3, $par4 = '', $par5 = NULL)
{
    var_dump($par1, $par2, $par3, $par4, $par5);
}

tuewas1('par1', 'par2', 'par3', 'par4', 'par5');

tuewas1('par1', 'par2', 'par3');

tuewas1(par5: 'parameter5', par2: 'parameter2', par1: 'parameter1', par3: 'parameter3');

# Werte zurückgeben lassen

function multiply($number1, $number2 = 1)
{
    $result = $number1 * $number2;

    return $result;
}

$ergebnis = multiply(12, 4);

echo $ergebnis, PHP_EOL;
echo multiply(17), PHP_EOL;

// Beispiel

$price = 9.99;
$amount = 15;

$netCost = multiply($price, $amount);

$totalCost = $netCost * 1.19;

echo 'Die Rechnung beträgt ' . $totalCost . ' EURO', PHP_EOL;

## mehrere Werte zurückgeben lassen

function getCosts($price, $amount = 1, $tax = 1.19)
{
    $netCost = $price * $amount;
    $grossCost = $netCost * $tax;

    return [$netCost, $grossCost];
} 


print_r(getCosts(3.99, 7, 1.07));

print_r(getCosts(3.99, tax: 1.07));

$costs = getCosts(5.99, 3, 1.07);

echo 'Rechnungsbetrag netto: ' . $costs[0] . PHP_EOL . 'Rechnungsbetrag brutto: ' . $costs[1], PHP_EOL;

# Dereferenzierung
## wenn eine Funktion ein Array zurückgibt und es wird nur ein Wert aus dem Array benötigt, kann dieser Wert direkt aus dem Rückgabewert des Funktionsaufruf durch anhängen des Indexoperators heraus'gepickt' (referenziert) werden 

$net = getCosts(1.99, 5)[0];

echo $net, PHP_EOL;

# Typisierung - Typdeklaration von Parametern und Rückgabetyp von Funktionen

// strikte Typprüfung aktivieren
# declare(strict_types=1); // muss am Anfang des Scriptes stehen

function divide(int|float $number1, int|float $number2) : int|float
{
    $result = $number1 / $number2;

    return $result;
}

echo divide(9, 3), PHP_EOL;
echo divide(9.4, 3.1), PHP_EOL;
// echo divide('9', '3'), PHP_EOL;


# Beispiel für return type never


function loadErrorPage(string $message = 'Es ist ein Fehler aufgetreten!') : never
{
    header('Location: error404.php');
    exit ($message);
}

# Funktionsaufruf

loadErrorPage('ein Fehler');

echo 'Hallo Welt';
