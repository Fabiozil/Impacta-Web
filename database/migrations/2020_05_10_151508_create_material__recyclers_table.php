<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialRecyclersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material__recyclers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recycler_id');
            $table->unsignedBigInteger('material_id');
            $table->timestamps();
            $table->foreign('recycler_id')
            ->references('id')->on('recyclers')
            ->onDelete('cascade');
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
        Schema::dropIfExists('material__recyclers');
    }
}
