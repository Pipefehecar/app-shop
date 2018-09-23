<?php

use Faker\Generator as Faker;
use App\PublicationImage;

$factory->define(PublicationImage::class, function (Faker $faker) {
    return [
        'image'=>'http://placeimg.com/320/200/arch',//$faker->imageUrl(250,250)
        'publication_id'=>$faker->numberBetween(1,100)
    ];
});
