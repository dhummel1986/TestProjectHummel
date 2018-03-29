<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Cars::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('Honda','Ford','Toyota')),
        'Model' => $faker->word,
        'Year' => $faker ->year($max='now'),

    ];
});
