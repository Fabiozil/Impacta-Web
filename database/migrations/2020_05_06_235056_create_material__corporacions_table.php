<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialCorporacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material__corporacions', function (Blueprint $table) {
            $table->id();
            $table->integer('kg');
            $table->dateTime('fecha', 0);

            $table->timestamps();

            $table->unsignedBigInteger('corporation_id');
            $table->foreign('corporation_id')
                ->references('id')->on('corporations')
                ->onDelete('cascade');

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')
                ->references('id')->on('materials')
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
        Schema::dropIfExists('material__corporacions');
    }
}
