<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecyclersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recyclers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('corporation_id');
            $table->foreign('corporation_id')
                ->references('id')->on('corporations')
                ->onDelete('cascade');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('apodo');
            $table->smallInteger('edad');
            $table->integer('celular');
            $table->date('fecha_nacimiento');
            $table->text('historia');
            $table->text('residuos');
            $table->text('comunas');
            $table->text('barrio'); //{ "barrio1": {"dias": ,"horas":}}

            $table->string('foto'); // Dirección del archivo local

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recyclers');
    }
}
