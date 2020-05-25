<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Publishers;
use Faker\Generator as Faker;

$factory->define(Publishers::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
