<?php

# kombinierte Operatoren (Zuweisungsoperatoren)

$number = 3;
$number = $number + 5;
echo $number, PHP_EOL;

// gleiches Beispiel mit dem kombinierte Additionszuweisungsoperator

$number = 3;
$number += 5; // ist das Gleiche, wie Zeile 6, also $number = $number + 5;
echo $number, PHP_EOL;

// Bsp. subtrahierende Zuweisungsoperator
$number = 8;
$number -= 3;
echo $number, PHP_EOL;

// Bsp. multiplizierender Zuweisungsoperator
$number = 8;
$number *= 5;
echo $number, PHP_EOL;

// Bsp. dividierender Zuweisungsoperator
$number = 8;
$number /= 3;
echo $number, PHP_EOL;

// Bsp. modulo-Zuweisungsoperator
$number = 142;
$number %= 13;
echo $number, PHP_EOL;

// Bsp. potenzierender Zuweisungsoperator
$number = 2;
$number **= 16;
echo $number, PHP_EOL;

// mehrere Zuweisungen in einem

$number = 2;
$result = $number **= 16; // $result = $number = $number ** 16;
echo $number, PHP_EOL;
echo $result, PHP_EOL;

// Auswertereihenfolge beachten => Operatorrangfolge https://www.php.net/manual/de/language.operators.precedence.php

# Ausdrücke in runden Klammern haben die höchste Präzedenz und werden deshalb immer zuerst ausgewertet

$result = 3 + 4 * 7;
echo $result, PHP_EOL;

$result = (3 + 4) * 7;
echo $result, PHP_EOL;

// Bsp. verknüpfender Zuweisungsoperator

$text = 'Hallo';
$text .= ' Welt';
echo $text, PHP_EOL;

// Trick - die Leerzeichen (empfohlen) um einen Operator können auch weggelassen werden

$text = 'Weiten und schwankende liebe schwebet jenem.';
$text.= 'Jugendlich mit stillen  wieder an,  irren getäuscht ach mild früh nennt noch tage schmerz, nach lispelnd beifall entwöhntes bringt halbverklungnen glück.';
$text.= ' Hören  sie sage träne. Dem der es nebel bringt es menge, wird schauer ein und einer.';
$text.= ' Der herz mich aus die weich, stunden tönen mit walten stunden. Die erschüttert manche.';

echo $text;



