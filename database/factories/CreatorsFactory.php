<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Creators;
use Faker\Generator as Faker;

$factory->define(Creators::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
