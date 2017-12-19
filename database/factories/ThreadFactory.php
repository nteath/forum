<?php

use Faker\Generator as Faker;


$factory->define(App\Thread::class, function (Faker $faker) {
    return [
        'user_id' => null,
        'title'   => $faker->sentence,
        'body'    => $faker->paragraph,
    ];
});
