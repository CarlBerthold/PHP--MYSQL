<?php

class Address 
{
    public function getClassName()
    {
    return __CLASS__;
    }
}

class Person 
{
    public function setAddress(Address $address)
    {
        echo $address->getClassName();
    }
}

$carl = new Person();
$adresse = new Address();

$carl->setAddress($adresse);