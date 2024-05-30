<?php


function connectDB()
{
    $dbms = 'mysql';
    $host = 'localhost';
    $dbname = 'user_management';
    $dbuser = 'root';
    $dbpassword = 'carl';
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $db = new PDO(
        "$dbms:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword,
        $options
    );

    return $db;
}