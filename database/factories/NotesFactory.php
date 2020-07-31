<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'author_id' => factory(\App\User::class),
        'client_id' => factory(\App\Client::class),
        'note_title' => $faker->sentence,
        'note_content' => $faker->paragraph
    ];
});
