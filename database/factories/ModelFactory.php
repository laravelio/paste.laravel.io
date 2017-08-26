<?php

use Ramsey\Uuid\Uuid;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Paste::class, function (Faker\Generator $faker) {
    return [
        'hash' => Uuid::uuid4()->toString(),
        'code' => $faker->realText(),
        'ip' => $faker->ipv4,
    ];
});
