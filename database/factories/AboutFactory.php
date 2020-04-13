<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\about;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    $cate = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    return [
        // 'description' => $faker->text(),
        'img_about'=> $faker->imageUrl(500, 300, $faker->randomElement($cate)),
        'titre2' => $faker->name(),
        'description2' => $faker->text(),
    ];
});
