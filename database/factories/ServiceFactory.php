<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'titre' => $faker->name,
        'description' => $faker->sentence(),
        'logo'=> $faker->imageUrl(500, 500, $faker->randomElement($cate)),
    ];
});
