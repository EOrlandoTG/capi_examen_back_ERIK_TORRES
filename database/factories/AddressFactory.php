<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'street' => $faker->sentence(2),
        'number' => $faker->unique()->randomNumber,
        'district' =>  $faker->sentence(2),
        'zip' => Str::random(5),
        'city'=> $faker->sentence(2),
        'user_id' => $faker->unique()->randomNumber,
    ];
});
