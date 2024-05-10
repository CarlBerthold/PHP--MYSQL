<?php

$firstname = "Max";
$lastname = "mustermann";
$street = "Musterstraße";
$houseNumber = 42;
$city = "Musterstadt";


$address = [
    "firstname" => $firstname,
    "lastname" => $lastname,
    "street" => $street,
    "houseNumber" => $houseNumber,
    "city" => $city
];



echo $jsonString = $firstname . PHP_EOL . $lastname . PHP_EOL . $street . PHP_EOL . $houseNumber . PHP_EOL . $city . PHP_EOL;

echo json_encode($address, JSON_PRETTY_PRINT);