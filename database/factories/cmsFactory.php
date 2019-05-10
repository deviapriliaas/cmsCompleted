<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(3),
        'description'=>$faker->sentence(10),
        'content'=>$faker->paragraph(4),
        'image' => 'image/4PajiMZIcReJzCo2w32unMOJH5F7ScQo8eEiDiI7.jpeg',
        'published_at'=>now(),
        'categories_id'=>1

    ];
});
