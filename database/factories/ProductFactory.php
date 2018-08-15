<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>'Aprovecha esta hermosa casa de oportunidad',
        //substr($faker->sentence(3), 0,-1),
	    'rooms'=>$faker->randomDigit,
	    'bathrooms'=>$faker->randomDigit,
	    'parking'=>$faker->randomDigit,
	    'area'=>$faker->randomFloat(2,38,5000),
	    'stratum'=>$faker->numberBetween(1,6),
	    'description'=>$faker->sentence(10),
	    'long_description'=>$faker->text,
	    'address'=>'Avenida Siempreviva #7-42',
	    'rent_or_sale'=>'venta',
	    'price'=>$faker->numberBetween(100000,3500000),

	    'category_id'=> $faker->numberBetween(1,5)
    ];
});
