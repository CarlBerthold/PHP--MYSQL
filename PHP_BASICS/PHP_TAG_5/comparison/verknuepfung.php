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