<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/inc/user.php';


$user = generateUser();

var_dump($user);




// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();



$firstname = $faker->firstName;
$lastname = $faker->lastName;
$email = $faker->email;
$password = $faker->password;
$role = $faker->role;
$created_at = $faker->created_at;
$updated_at = $faker->updated_at;


// generate data by calling methods
echo $faker->name();
// 'Vince Sporer'
echo $faker->email();
// 'walter.sophia@hotmail.com'
echo $faker->text();
// 'Numquam ut mollitia at consequuntur inventore dolorem.'


for ($i = 0; $i < 3; $i++) {
    echo $faker->name() . "\n";
}

// 'Cyrus Boyle'
// 'Alena Cummerata'
// 'Orlo Bergstrom'
