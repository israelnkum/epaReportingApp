<?php

use Faker\Generator as Faker;

$factory->define(App\models\Client::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'username' => $faker->userName,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'emailAddress' => $faker->unique()->safeEmail,
        'phoneNumber' => $faker->phoneNumber,
        'dateOfBirth' => $faker->date('Y-m-d'),
        'homeTown' => $faker->city,
    ];
});
