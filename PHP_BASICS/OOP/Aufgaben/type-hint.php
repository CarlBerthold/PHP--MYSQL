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