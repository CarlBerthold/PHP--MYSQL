<?php

class Konto 
{
    function test(){
        return 'test';
    }
}



// klammern können wegelassen werden solang die klasse über keine methoden oder constructor methoden enthält
$sparbuch1 = new Konto;
var_dump($sparbuch1->test());

$sparbuch2 = new Konto();
$tagesgeldKonto = new Konto();
$giroKonto = new Konto();