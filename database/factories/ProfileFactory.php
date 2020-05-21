<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id'   => rand(1, 2),
        'nik'       => Str::uuid(),
        'ttl'       => $faker->streetName,
        'alamat'    => $faker->address,
        'rt'        => $faker->address,
        'rw'        => $faker->address,
    ];
});
