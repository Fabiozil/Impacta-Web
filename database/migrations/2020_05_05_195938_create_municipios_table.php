<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mun',100);
            $table->timestamps();
        });
        Schema::create('comunas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_com',100);
            $table->timestamps();
        });
        Schema::create('sectores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('comuna_id');
            $table->string('nombre_sect',100);
            $table->tinyInteger('tipo')->default(1);
            $table->timestamps();
            $table->foreign('municipio_id')
            ->references('id')->on('municipios')
            ->onDelete('cascade');
            $table->foreign('comuna_id')
            ->references('id')->on('comunas')
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
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('comunas');
        Schema::dropIfExists('sectores');
    }
}
