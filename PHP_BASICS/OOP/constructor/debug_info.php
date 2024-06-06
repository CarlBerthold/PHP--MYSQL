<?php

class User 
{
    protected $name = 'Gustav';
    protected $password = 'supergeheim';
    protected $creditCard = '1273 0958 6783 9837';
    protected $pin = '4971';


    public function __debugInfo() : array
    {
        return [
            'name' => $this->name,
            'password' => $this->password,
            'creditCard' => '...837',
        ];
    }
}



$user = new User;


var_dump($user);
