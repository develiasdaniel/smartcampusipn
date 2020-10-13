<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirPollutionHistoricalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_pollution_historical', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_station',50);
            $table->foreign('id_station')->references('id_station')->on('station');
            $table->date('monitoring_date');
            $table->time('monitoring_time');
            $table->double('co_ppm');
            $table->double('o3_ppm');
            $table->double('so2_ppb');            
            $table->double('no2_ppb');
            $table->double('pm25');
            $table->double('pm10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('air_pollution_historical');
    }
}
