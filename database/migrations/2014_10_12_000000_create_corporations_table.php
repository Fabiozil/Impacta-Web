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
            // Corporación
            $table->string('nombre_corp');
            $table->integer('telefono');
            $table->string('razon_social');
            // $table->string('tipo_doc_corp');
            $table->integer('num_doc_corp')->unique();
            $table->text('ubicacion_corp');
            $table->string('logo_corp'); // Dirección de archivo local

            // Email
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

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
