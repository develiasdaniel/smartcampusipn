<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalAqiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical_aqi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_station',50);
            $table->foreign('id_station')->references('id_station')->on('station');
            $table->date('date');
            $table->time('time');
            $table->integer('o3_aqi');
            $table->integer('co_aqi');
            $table->integer('so2_aqi');
            $table->integer('no2_aqi');
            $table->integer('pm25_aqi');
            $table->integer('pm10_aqi');
            $table->integer('value_aqi');
            $table->string('level_aqi');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_aqi');
    }
}
