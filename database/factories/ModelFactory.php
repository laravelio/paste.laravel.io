<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Paste::class, function (Faker\Generator $faker) {
    return [
        'hash' => $faker->slug,
        'code' => $faker->realText(),
        'ip' => $faker->ipv4,
    ];
});
