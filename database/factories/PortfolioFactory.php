<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        'titre' => $faker->sentence(),
        'description' => $faker->sentence(),
        'image'=> $faker->imageUrl(500, 300, $faker->randomElement($cate)),
    ];
});
