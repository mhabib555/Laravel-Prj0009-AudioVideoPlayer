<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Albums;
use Faker\Generator as Faker;

$factory->define(Albums::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'artist_id' => factory(App\User::class),
    ];
});
