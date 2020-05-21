<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'nik'       => Str::uuid(),
        'ttl'       => $faker->streetName,
        'alamat'    => $faker->address,
        'rt'        => $faker->address,
        'rw'        => $faker->address,
    ];
});
