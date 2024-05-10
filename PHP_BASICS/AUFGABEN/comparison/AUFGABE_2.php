<?php

$firstName = "Max";
$lastName = "mustermann";
$street = "Musterstraße";
$houseNumber = 42;
$city = "Musterstadt";

// echo $jsonString = $firstName . PHP_EOL . $lastName . PHP_EOL . $street . ' ' . $houseNumber . PHP_EOL . $city . PHP_EOL;


$firstKey = "firstname";
$secondKey = "lastname";
$thirdKey = "street";
$fourthKey = "houseNumber";
$fifthKey = "city";

// echo $jsonToString = " \"{$firstKey}\" : \"{$firstName}\" " . PHP_EOL . " \"{$secondKey}\" : \"{$lastName}\"" . PHP_EOL . "\"{$thirdKey}\" : \"{$street}\"" . PHP_EOL . "\"{$fourthKey}\" : \"{$houseNumber}\"" . PHP_EOL . "\"{$fifthKey}\" : \"{$city}\"" . PHP_EOL;


$jsonString = 
"{
    \"$firstKey\": \"$firstName\",
    \"$secondKey\": \"$lastName\",
    \"$thirdKey\": \"$street\",
    \"$fourthKey\": $houseNumber,
    \"$fifthKey\": \"$city\"
}";

 echo ($jsonString);


$address = [
    "firstname" => $firstName,
    "lastname" => $lastName,
    "street" => $street,
    "houseNumber" => $houseNumber,
    "city" => $city
];

echo json_encode($address, JSON_PRETTY_PRINT);
