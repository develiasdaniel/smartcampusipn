<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('surname',100);
            $table->bigInteger('id_occupation')->unsigned();
            $table->foreign('id_occupation')->references('id')->on('occupations');
            $table->string('address',150)->nullable();
            $table->string('cellphone',20)->nullable();
            $table->string('city',30)->nullable();
            $table->string('organization',100)->nullable();
            $table->integer('age')->nullable();
            $table->string('sex',20)->nullable();
            $table->string('photo',70)->nullable();
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
        Schema::dropIfExists('people');
    }
}
