<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'category_id' => rand(1,3),
        'title' => $faker->sentence(),
        'slug' =>\Str::slug($faker->sentense()),
        'body' => $faker->paragraph(10)
    ];
});
