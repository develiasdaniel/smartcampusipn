<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeteorologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meteorology', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_station',50);
            $table->foreign('id_station')->references('id_station')->on('station');
            $table->date('monitoring_date');
            $table->time('monitoring_time');
            $table->double('temperature');
            $table->double('humidity');
            $table->double('pressure');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meteorology');
    }
}
