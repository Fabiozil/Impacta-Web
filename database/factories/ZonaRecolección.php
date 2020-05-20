<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ZonaRecoleccion;
use App\Sector;
use App\Recycler;
use Faker\Generator as Faker;

$factory->define(ZonaRecoleccion::class, function (Faker $faker) {
    return [
        'recycler_id'=>factory(Recycler::class),
        'sector_id'=> Sector::all()->random()->id,
        'dias'=>$faker->randomElement(['L M X','J V','S D']),
        'horas'=>$faker->randomElement(['8:00-20:00','13:00-18:00','9:00-15:00']),
    ];
});
