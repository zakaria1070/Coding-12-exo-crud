<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\subscribe;
use Faker\Generator as Faker;

$factory->define(Subscribe::class, function (Faker $faker) {
    return [
        'description' => $faker->text(),
        'titre' => $faker->name,
       
    ];
});
