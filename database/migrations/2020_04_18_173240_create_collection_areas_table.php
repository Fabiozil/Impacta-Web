<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recycler_id');
            $table->string('barrio');
            $table->dateTime('dias_horas');
            $table->timestamps();

            $table->foreign('recycler_id')
                ->references('id')->on('recyclers')
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
        Schema::dropIfExists('collection_areas');
    }
}
