<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Corporation;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$72ZBsMni3Eh8IRZBx9iU3e/8rWrZyc60rZfNCiuWo1Hn/irPBq1Qm', // password
        'tipo_usuario'=>1,
        'remember_token' => Str::random(10),
    ];
});

$id=0;
$factory->define(Corporation::class,function (Faker $faker) {
 /*   $corp = Corporation::all();
    echo $corp;
    if ($corp->isEmpty()) {
        $id=1;
    }else{
        $id= User::all()->except($corp->id)->random()->id;
    }*/
    global $id;
    echo $id;
    $id++;
    return [
        'id'=> $id,
        'nombre_rep'=>$faker->name,  //Nombre Representante
        'apellidos_rep'=>$faker->lastname, //Apellido Representante
        'tipo_doc_rep'=>0,// Tipo documento representante
        'num_doc_rep'=>$faker->numberBetween($min = 1000, $max = 9000), //Numero de documento rep
        'cargo_rep'=>$faker->word,// Cargo representante
        'email_rep'=>$faker->unique()->safeEmail,// Email representante
        'telefono'=>$faker->numberBetween($min = 1000, $max = 9000), //Telefono Corporación
        'razon_social'=>$faker->word, //Razon social Corporación
        'num_doc_corp'=>$faker->numberBetween($min = 1000, $max = 9000),
    ];
});

