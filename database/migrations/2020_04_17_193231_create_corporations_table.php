<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->id();
            // Reprsentante
            $table->string('nombre_rep');
            $table->string('apellidos_rep');
            $table->smallInteger('tipo_doc_rep');
            $table->integer('num_doc_rep')->unique();
            $table->string('cargo_rep');
            // Corporación
            $table->integer('telefono')->unique();
            $table->string('razon_social');
            $table->string('tipo_doc_corp');
            $table->integer('num_doc_corp')->unique();
            $table->text('ubicacion_corp');
            $table->string('logo_corp'); // Dirección del archivo local

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
        Schema::dropIfExists('corporations');
    }
}
