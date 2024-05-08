<?php

# mehrere Parameter definieren

function sayHello($firstname, $lastname, $greeting, $salutation)
{
    echo "$greeting, $firstname $lastname!\n";
    echo "Wie geht es $salutation?\n";
}

sayHello('Jörg', 'Wüst', 'Moin', 'Dir');
sayHello('Donald', 'Duck', 'QuackQuack', 'Ihnen');

## Was passiert, wenn ich weniger Argumente (also Werte beim Funktionsaufruf) angebe, als Parameter im Funktionskopf definiert sind?

// sayHello('Daisy', 'Duck', 'Hallo'); // => PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function sayHello(), 3 passed in ...

## Was passiert, wenn wir zu viele Argument angeben?

sayHello('Daisy', 'Duck', 'Hallo', 'Dir', 'ein zusätzlicher Wert', 42);

## Wie verhält es sich mit der Reihenfolge der Argumente/Parameter?

sayHello('Duck', 'Hallo altes Haus', 'Wir', 'Daisy');
