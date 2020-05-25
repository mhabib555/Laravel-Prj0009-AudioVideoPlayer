<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Playlists;
use Faker\Generator as Faker;

$factory->define(Playlists::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
