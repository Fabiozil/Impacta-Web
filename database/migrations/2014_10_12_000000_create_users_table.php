<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('direccion');
            $table->timestamps();
        });

        // Nueva tabla intermedia corporation_user
        Schema::create('corporation_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('corporation_id');
            // Machetazo porque laravel no maneja relaciones 0 a muchos
            $table->unsignedBigInteger('user_id')->unique(); // Usuarios solo 1 corp
            $table->timestamps();

            // Verifica que no se repita corporación y usuario
            $table->unique(['corporation_id', 'user_id']);

            $table->foreign('corporation_id')
                ->references('id')->on('corporations')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('users');
    }
}
