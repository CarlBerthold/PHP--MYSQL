<?php

require_once __DIR__ . '/inc/User.php';

# Instanz aus der Klasse User erstellen

$user = new User();

var_dump($user);

## Attribute befüllen

// $user->firstname = 'Erika';
$user->setFirstname('Erika');
$user->setLastname('Mustermann');
// $user->setFullname('Erika', 'Mustermann');
$user->setPassword('1234');

var_dump($user);

## Attributswerte auslesen

echo 'Hallo ' . $user->getFirstname() . '!', PHP_EOL;

### wir wollen im View eine Ausgabe von Vorname Nachname innerhalb einer Begrüßung machen

// Hallo liebe Frau Erika Mustermann, willkommen auf unserer tollen Webseite

echo 'Hallo liebe Frau ' . $user->getFirstname() . ' ' . $user->getLastname() . ', willkommen auf unserer tollen Webseite', PHP_EOL;
echo "Hallo liebe Frau {$user->getFirstname()} {$user->getLastname()}, willkommen auf unserer tollen Webseite", PHP_EOL;

# Die Ausgabe ist zu kompliziert

echo 'Hallo liebe Frau ' . $user->getFullname() . ', willkommen auf unserer tollen Webseite', PHP_EOL;

$user->setSalutation('Frau');
$user->setGreeting('Hallo liebe');

echo "{$user->getGreeting()} {$user->getSalutation()} {$user->getFullname()}, willkommen auf unserer tollen Webseite", PHP_EOL;

## mittels virtuellem Attribut 'welcome'

echo $user->getWelcome() . ', willkommen auf unserer tollen Webseite', PHP_EOL;


