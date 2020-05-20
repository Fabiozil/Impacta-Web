<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonaRecoleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona_recoleccion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recycler_id');
            $table->unsignedBigInteger('sector_id');
            $table->string('dias',50);
            $table->string('horas',100);
            $table->timestamps();
            $table->foreign('recycler_id')
            ->references('id')->on('recyclers')
            ->onDelete('cascade');
            $table->foreign('sector_id')
            ->references('id')->on('sectores')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zona_recoleccion');
    }
}
