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
            // Representante
            $table->string('nombre_rep');
            $table->string('apellidos_rep');
            $table->smallInteger('tipo_doc_rep');
            $table->integer('num_doc_rep')->unique();
            $table->string('cargo_rep');
            $table->string('email_rep')->unique();
            // Corporación
            $table->integer('telefono');
            $table->string('razon_social');
            $table->integer('num_doc_corp')->unique();
            $table->text('ubicacion_corp')->nullable();
            $table->string('logo_corp')->nullable(); // Dirección de archivo local

           // $table->timestamp('email_verified_at')->nullable();

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
