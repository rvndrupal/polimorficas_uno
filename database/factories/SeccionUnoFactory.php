<?php

use Faker\Generator as Faker;

$factory->define(App\SeccionUno::class, function (Faker $faker) {
    return [
        'banner' => $faker->imageUrl($width=1800, $height=1000),
        'imguno' => $faker->imageUrl($width=600, $height=600),
    ];
});
