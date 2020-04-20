<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('direccion')->nullable();
        });

          // Nueva tabla intermedia corporation_user
        Schema::create('affiliate_corporation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('corporation_id');
            $table->timestamps();
            $table->foreign('corporation_id')
                ->references('id')->on('corporations')
                ->onDelete('cascade');
            $table->foreign('id')
                ->references('id')->on('affiliates')
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
        Schema::dropIfExists('affiliates');
        Schema::dropIfExists('affiliate_corporation');
    }
}
