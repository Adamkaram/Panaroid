<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'details' => $faker->sentence(8),
        'price' => $faker->numberBetween(1000, 500000),
        'description' => $faker->paragraph,
        'user_id'=> factory(\App\User::class)->create(),
        'image' => $faker->image,

    ];
});
