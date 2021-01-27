<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bottom;
use Faker\Generator as Faker;

$factory->define(Bottom::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'image'=>$faker->imageUrl($width = 200, $height = 200),
        'description'=>$faker->sentence,
        'size'=>rand(1,100),
        'color'=>$faker->name,
        'price'=>rand(1000,20000),
    ];
});
