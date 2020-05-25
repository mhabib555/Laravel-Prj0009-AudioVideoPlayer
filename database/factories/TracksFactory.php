<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tracks;
use Faker\Generator as Faker;

use App\Models\Albums;
use App\Models\MediaTypes;
use App\Models\Genres;
use App\Models\Creators;
use App\Models\Publishers;

$factory->define(Tracks::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'album_id' => factory(Albums::class),
        'media_type_id' => factory(MediaTypes::class),
        'genre_id' => factory(Genres::class),
        'milliseconds' => $faker->numberBetween($min = 1000, $max = 9000),
        'bytes' => $faker->numberBetween($min = 100000000, $max = 100000000000),
        'creator_id' => factory(Creators::class),
        'publisher_id' =>factory(Publishers::class),
    ];
});
