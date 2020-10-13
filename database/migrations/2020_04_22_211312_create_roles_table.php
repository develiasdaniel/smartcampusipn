<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_role',30)->unique();
            $table->string('description',150)->nullable();
            $table->boolean('state')->default(true);
            $table->timestamps();
        });

        $mytime=Carbon::now('America/Mexico_City');

        DB::table('roles')->insert(array('id'=>'1','name_role'=>'Administrador'
            ,'description'=>'Administrador del sistema','created_at'=>$mytime->toDateString()));
        
        DB::table('roles')->insert(array('id'=>'2','name_role'=>'Visitante'
            ,'description'=>'Visitante del sistema','created_at'=>$mytime->toDateString()));

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
