<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    
    return [
        'nombre'=> $faker->name,
        'descripcion'=> $faker->sentence,
        'iframe'=> $faker->sentence,
        'tamano'=> $faker->name,
        'precio'=> $faker->name,
        'color'=> $faker->name,
        'peso'=> $faker->name,
        'category_id' => rand(1,2),
        
    ];
});
