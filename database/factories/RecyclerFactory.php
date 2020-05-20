<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recycler;
use App\Corporation;
use Faker\Generator as Faker;

$factory->define(Recycler::class, function (Faker $faker) {
    return [
        'corporation_id'=>Corporation::all()->random()->id,
        'nombres'=> $faker->name,
        'apellidos'=>$faker->lastname,
        'apodo'=> $faker->word,
        'edad'=>$faker->numberBetween(20,60),
        'celular'=>$faker->numberBetween($min = 1000, $max = 9000),
        'fecha_nacimiento'=>$faker->date($format = 'Y-m-d', $max = '2000-01-01'),
        'historia'=>$faker->text(500),
        'foto'=>$faker->randomElement(['1.jpg','2.jpg','3.jpg']),
    ];
});
