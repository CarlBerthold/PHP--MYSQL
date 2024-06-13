<?php

require_once __DIR__ . '/inc/User.php';

# Instanz erzeugen, manuelles Setzen der Attributswerte durch Direktzugriff
$user = new User();
var_dump($user);

$user->id = 3;
$user->firstname = 'Erika';
$user->lastname = 'Mustermann';
$user->email = 'erika@example.com';
$user->password = 'wiemax';
$user->role = 'user';
$user->createdAt = date('Y-m-d H:i:s');
$user->updatedAt = date('Y-m-d H:i:s');

var_dump($user);

# Instanz erzeugen, manuelles Setzen der Attributswerte mittels Setteraufruf
$user = new User();
var_dump($user);

$user->setId(3);
$user->setFirstname('Erika');
$user->setLastname('Mustermann');
$user->setEmail('erika@example.com');
$user->setPassword('wiemax');
$user->setRole('user');
$user->setCreatedAt(date('Y-m-d H:i:s'));
$user->setUpdatedAt(date('Y-m-d H:i:s'));

var_dump($user);

# Instanz erzeugen und direktes Setzen der Attributswerte via Constructor
$postData = [
    'id' => 42,
    'firstname' => 'Erika',
    'lastname' => 'Mustermann',
    'email' => 'erika@example.com',
    'password' => 'wiemax',
    'role' => 'user',
    'created_at' => '2024-06-08 16:17:53',
    'updated_at' => '2024-06-08 16:17:53',
];

$user = new User($postData);
var_dump($user);

# Instanz erzeugen und direktes Setzen der Attributswerte mittels Setter für User::$attributes

$user = new User($postData);
var_dump($user);

$user->setAttributes($postData);
var_dump($user);

# Attibutswerte auslesen durch durch Direktzugriff

var_dump($user->id);
var_dump($user->firstname);
var_dump($user->password);
var_dump($user->attributes);

# Attibutswerte auslesen durch Getteraufrufe
var_dump($user->getId());
var_dump($user->getFirstname());
var_dump($user->getPassword());
var_dump($user->getAttributes());

# Test - bereits gehashtes Password setzen
$password = '$2y$10$I/xAAVBw1zSuM8FVMIaqR.Q57LJPP4.SzU10aHqGAZG.UX3Vzcmau';

## Direktzugriff
$user = new User();
var_dump($user);

$user->password = $password;
var_dump($user);

## mittels Setter
$user = new User();
var_dump($user);

$user->setPassword($password);
var_dump($user);

# Testen - Verhalten bei nichtvorhandenen Attributen

$user = new User();
var_dump($user);

## Direktzugriff auf nichtexistierendes Attribut
var_dump($user->age);
$user->age = 42;
var_dump($user);

## Direktzugriff Getter und Setteraufruf eines nichtexistierendes Attribut
var_dump($user->getAge());
var_dump($user->setAge(42));

## Testen zusätzliche Keys in Datenarray bei Instanziierung (testet gleichzeitig auch das Fehlen von Keys)

$postData = [
    'id' => 17,
    'firstname' => 'Erika',
    'lastname' => 'Mustermann',
    'age' => 42,
    'passwort' => 'bitteEnglisch',
];

$user = new User($postData);
var_dump($user);

## Testen zusätzliche Keys in Datenarray bei Setteraufruf setAttributes (testet gleichzeitig auch das Fehlen von Keys)

$user = new User();

$user->setAttributes($postData);
var_dump($user);