<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'quantity' => rand(0, 100),
        'price' => rand(0, 100)
    ];
});
