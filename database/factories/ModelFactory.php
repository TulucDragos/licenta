<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Product::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'imagePath' => $faker->sentence,
        'title' => $faker->sentence,
        'description' => $faker->text(),
        'price' => $faker->randomNumber(5),
        
        
    ];
});
