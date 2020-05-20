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
            $table->string('apodo')->nullable()->default('No Aplica');
            $table->smallInteger('edad');
            $table->string('celular');
            $table->date('fecha_nacimiento');
            $table->text('historia');
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
