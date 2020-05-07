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
        'dias_horas'=>$faker->word,
    ];
});
