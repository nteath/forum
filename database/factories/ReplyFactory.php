<?php

use Faker\Generator as Faker;


$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'user_id'   => null,
        'thread_id' => null,
        'body'      => $faker->paragraph,
    ];
});
