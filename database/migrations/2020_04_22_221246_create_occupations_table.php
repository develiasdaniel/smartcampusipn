<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_occupation',50)->unique();
            $table->string('description',250)->nullable();
            $table->boolean('state')->default(true);
            $table->timestamps();
        });

        $mytime=Carbon::now('America/Mexico_City');

        DB::table('occupations')->insert(array('id'=>'1','name_occupation'=>'No seleccionado',
            'description'=>'Aun no selecciona su ocupación','created_at'=>$mytime->toDateString()));
        DB::table('occupations')->insert(array('id'=>'2','name_occupation'=>'Estudiante Pregrado',
            'description'=>'Estudiante de universidad o menor grado','created_at'=>$mytime->toDateString()));
        DB::table('occupations')->insert(array('id'=>'3','name_occupation'=>'Estudiante Posgrado',
            'description'=>'Estudiante que cursa un posgrado(maestría, doctorado, especialidad,etc)','created_at'=>$mytime->toDateString()));
        DB::table('occupations')->insert(array('id'=>'4','name_occupation'=>'Profesor',
            'description'=>'Profesor de un grado académico','created_at'=>$mytime->toDateString()));
        DB::table('occupations')->insert(array('id'=>'5','name_occupation'=>'Investigador',
            'description'=>'Docente investigador de un programa de posgrado','created_at'=>$mytime->toDateString()));
        DB::table('occupations')->insert(array('id'=>'6','name_occupation'=>'Administrativo',
            'description'=>'Personal administrativo','created_at'=>$mytime->toDateString()));
        DB::table('occupations')->insert(array('id'=>'7','name_occupation'=>'Empleado',
            'description'=>'Empleado activo','created_at'=>$mytime->toDateString()));
        DB::table('occupations')->insert(array('id'=>'8','name_occupation'=>'Otro',
            'description'=>'Otra ocupación no mencionada','created_at'=>$mytime->toDateString()));
        
            
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occupations');
    }
}
