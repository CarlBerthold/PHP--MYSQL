<?php

$wochentag = 'Montag';

// erst mit einfachen Anführungszeichen
echo 'Heute ist $wochentag!' . PHP_EOL;

// jetzt mit doppelten
echo "Heute ist $wochentag!" . PHP_EOL;

// die klassische Methode - Stringverknüfung bzw. Konkatenation
echo 'Heute ist ' . $wochentag . '! ' . PHP_EOL;

// Interpretation Escape-Sequenzen
echo "Dies erzeugt einen: \n Zeilenumbruch" . PHP_EOL;

// Interpretation Escape-Sequenzen (Maskierung des $-Zeichen)
echo "Heute ist \$wochentag!" . PHP_EOL;

// variable Variablenbezeichner
$tag = 'wochentag';
echo "Heute ist ${wochentag}!" . PHP_EOL; # deprecated ab PHP 8
echo "Heute ist {$wochentag}!" . PHP_EOL;