<?php

use Faker\Generator as Faker;
use App\Type;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'name'=>ucfirst($faker->randomElement(['lote' ,'casa', 'apartamento','oficina','bodega'])),
        'description'=>$faker->sentence(10)  
    ];
});
 