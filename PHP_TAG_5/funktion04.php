<?php

# Funktion in einer Funktion definieren

function outer() 
{
    function inner()
    {
        echo 'function inner()', PHP_EOL;
    }

    inner();
    echo 'function outer()', PHP_EOL;
}

/* outer();

## Kann die Funktion inner() vom globalen Scope aus aufgerufen werden?

inner();
// => sobald die Funktion outer einmal aufgerufen wurde, ist die Funktion inner wieder global aufrufbar */

## Funktionsaufruf von inner ohne zuvor outer aufgerufen zu haben

/* inner(); // => HP Fatal error:  Uncaught Error: Call to undefined function inner() in ...

// outer();

// => die Funktion inner ist nur aufrufbar, wenn zuvor outer aufgerufen wurde */

## Was passiert, wenn ich outer 2-mal oder mehrmals aufrufe?

outer();
inner();
// outer(); // => PHP Fatal error:  Cannot redeclare inner() (previously declared in ...

## Fazit: in PHP ist es 'nicht' möglich Funktion zu kapseln!

// es ist jedoch möglich bedingte Funktionen zu erstellen