<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Artists;
use Faker\Generator as Faker;

$factory->define(Artists::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
