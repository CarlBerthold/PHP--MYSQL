<?php

error_reporting(0);

class User 
{
    public $username = 'Oli';
    public $password = 'ganzgeheim';
    public $role = 'admin';

}

# direkter Zugriff auf Attribute - Fallstricke

$oli = new User();

// viel Code

$oli->password = 'meinsupergeheimesPasswort';

var_dump($oli);

// viel Code

$oli->passwort = 'dasfinalePasswort'; // erzeugt ein neues Attribut
# vor PHP 8 wurde auch keinerlei Meldung ausgegeben
# => das kann zur Folge haben, dass z. B. das alte Passwort aus dem Attribut User::password gespeichert wird
 
var_dump($oli);

