<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_station',50)->unique();
            $table->string('name',150);
            $table->string('location',150)->nullable(); 
            $table->decimal('latitud',10,10)->nullable();
            $table->decimal('longitud',10,10)->nullable();
            $table->string('description',100)->nullable();
            $table->string('zone',50);
            $table->boolean('state')->default(true);
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
        Schema::dropIfExists('station');
    }
}
