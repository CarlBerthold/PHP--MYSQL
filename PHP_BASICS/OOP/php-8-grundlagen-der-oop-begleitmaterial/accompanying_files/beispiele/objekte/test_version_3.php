<?php

require_once 'person.php';
session_start();

// Objekt in der Session ablegen
$_SESSION['teriete'] = new Person();
