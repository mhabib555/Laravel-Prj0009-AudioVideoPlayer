<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PlaylistTrack;
use Faker\Generator as Faker;

$factory->define(PlaylistTrack::class, function (Faker $faker) {
    return [
        'playlist_id' => factory(Playlists::class),
        'track_id' => factory(Tracks::class),
    ];
});
