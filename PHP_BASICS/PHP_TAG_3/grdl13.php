<?php

# Vergleich der Funktion empty() mit isset()

## Prüfen einer nicht existieren Variablen
var_dump(empty($var)); // bool(true)
var_dump(isset($var)); // bool(false)

## Prüfen Variable mit beliebigen Wert

$var = 'Hallo Welt';
var_dump(empty($var)); // bool(false)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit leerem String `''`

$var = '';
var_dump(empty($var)); // bool(true)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit einem Leerzeichen als String

$var = ' ';
var_dump(empty($var)); // bool(false)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit dem numerischen String '0'

$var = '0';
var_dump(empty($var)); // bool(true)
var_dump(isset($var)); // bool(true)

$var = '0.0';
var_dump(empty($var)); // bool(false)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit dem numerischen String '1'

$var = '1';
var_dump(empty($var)); // 
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit dem Integerwerte 0

$var = 0;
var_dump(empty($var)); // bool(true)
var_dump(isset($var)); // bool(true)

$var = 0.0;
var_dump(empty($var)); // bool(true)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit dem Integerwerte 1

$var = 1;
var_dump(empty($var)); // bool(false)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit dem bool-Wert TRUE

$var = TRUE;
var_dump(empty($var)); // bool(false)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit dem bool-Wert FALSE

$var = FALSE;
var_dump(empty($var)); // bool(true)
var_dump(isset($var)); // bool(true)

## Prüfen Variable mit dem Wert NULL

$var = NULL;
var_dump(empty($var)); // bool(true)
var_dump(isset($var)); // bool(false)