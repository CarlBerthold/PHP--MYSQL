<?php

require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;

function generateUser(int $amount = 1, bool $admin = false) :array
{
    static $faker = '';
    if ($faker === '') $faker = Factory::create('de_DE');

    //$datetime = $faker->dateTimeBetween('-2 week');

    $user = [];
    for($i = 1; $i <= $amount; $i++) {
        $user = [];
        $user['firstname'] = $faker->firstName();
        $user['lastname'] = $faker->lastName();
        $user['email'] = $faker->email();
        $user['password'] = password_hash($faker->password(), PASSWORD_DEFAULT);
        if($admin) {
            $user['role'] = 'admin';
        } else {
            // if admin is false, we set the role to user
            $user['role'] = 'user';
        }
      
        $users[] = $user;
    }

    return $users;
}

//var_dump($users);

//file_put_contents('user_data.php', serialize($users));