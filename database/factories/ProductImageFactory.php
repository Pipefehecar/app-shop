<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'image'=>'http://placeimg.com/320/200/arch',//$faker->imageUrl(250,250)
        'product_id'=>$faker->numberBetween(1,100)
    ];
});
