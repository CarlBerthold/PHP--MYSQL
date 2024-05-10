<?php

$operand1 = FALSE;
$operand2 = TRUE;

var_dump($operand1 && $operand2);
var_dump($operand1 AND $operand2);
var_dump(FALSE && FALSE);
var_dump(TRUE && FALSE);
var_dump(FALSE && TRUE);
var_dump(TRUE && TRUE);

var_dump($operand1 || $operand2);
var_dump($operand1 OR $operand2);
var_dump(FALSE || FALSE);
var_dump(TRUE || FALSE);
var_dump(FALSE || TRUE);
var_dump(TRUE || TRUE);


var_dump(FALSE || TRUE && FALSE);

var_dump(!TRUE || FALSE);
var_dump(TRUE || !FALSE);
var_dump(TRUE && !TRUE);

var_dump(!TRUE && FALSE);
var_dump(TRUE && !FALSE);
var_dump(TRUE && !TRUE);


var_dump((bool) 'Hallo');
var_dump('Hallo' || FALSE);



/**
 * Undocumented function
 *
 * @return void
 */
function ausgabe() : void
{
    var_dump('Hallo Welt!', PHP_EOL);
}

var_dump(TRUE || ausgabe());
var_dump(FALSE || ausgabe());

var_dump(TRUE && ausgabe());
var_dump(FALSE && ausgabe());


// logical Terror
var_dump(((true && false || (int)'Hallo' * 0 && !5 - 14 * (int)'2 Bier!') * 10) !== true);

echo ((true && false || (int)'Hallo' * 0 && !5 - 14 * (int)'2 Bier!') * 10) !== true;


