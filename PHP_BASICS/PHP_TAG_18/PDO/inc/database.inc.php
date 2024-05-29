<?php

function connectDB(): PDO
{
    # Datenbankverbindung aufbauen

    ## Vorschlag für eine Standardkonfiguration

    $dbms = 'mysql';
    $host = 'localhost';
    $dbname = 'seminarverwaltung';
    $dbuser = 'root';
    $dbpassword = 'carl';
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // default - für Entwicklung
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // für Testing
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT, // für Produktivbetrieb
    ];

    $db = new PDO(
        "$dbms:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword,
        $options
    );

    return $db;
}
