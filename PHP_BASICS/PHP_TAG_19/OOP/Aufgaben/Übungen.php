<?php



class PHP 
{
    public $array = [];
    public $string = '';
    public $numbers = 1;
    public $boolean = True;

    public function function() 
    {
        return 'function()';
    }
}



class User 
{
    public $name = '';

    public $position = '';


    public $billing = '';


    public $address = [
        'name' => '',
        'street' => 'Alexanderplatz',
        'streetnumber' => 3,
        'zipcode' => '12053',
        'city' => 'Berlin',
    ];
}

$carl = new User();

$name = $carl->name = 'Gustav';

var_dump($address = $carl);