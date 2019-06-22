<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Write;
use Faker\Generator as Faker;

$factory->define(Write::class, function (Faker $faker) {
    return [
		'title' => $faker->sentence(),
		'content' => $faker->text(2000)
    ];
});
