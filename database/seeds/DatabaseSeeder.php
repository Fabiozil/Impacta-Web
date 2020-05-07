<?php

use App\User;
use App\Recycler;
use App\Corporation;
use App\ZonaRecoleccion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // $this->call(UserSeeder::class);
        User::truncate();
        Corporation::truncate();
        Recycler::truncate();
        ZonaRecoleccion::truncate();
        $cantidadUsuarios=5;
        $cantidadCorporation=5;
        $cantidadRecycler=30;
        factory(User::class,$cantidadUsuarios)->create();
        factory(Corporation::class,$cantidadCorporation)->create();
        factory(Recycler::class,$cantidadRecycler)->create()
        ->each(function($recycler){
            $recycler->zonaRecoleccion()->createMany(factory(ZonaRecoleccion::class,3)->make()->toArray());
        });
    }
}
