<?php

use Faker\Generator as Faker;

$factory->define(App\Persona::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->name,
        'apellidos'=> $faker->sentence,
        'descripcion'=> $faker->sentence,
        'imguno' => $faker->imageUrl($width=500, $height=500),
        'imgdos' => $faker->imageUrl($width=200, $height=200),
    ];
});
