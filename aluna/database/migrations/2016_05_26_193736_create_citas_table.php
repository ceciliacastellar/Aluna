<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre_medico');
          $table->string('area');
          $table->string('fecha');
          $table->string('hora');
          $table->string('motivo_consulta');
          $table->longText('descripcion');
          $table->integer('alumno_id')->unsigned();

          $table->foreign('alumno_id')->references('id')->on('alumno')
                ->onUpdate('cascade')->onDelete('cascade');
          $table->timestamps();
        });


  /*    Schema::create('citas_alumno', function (Blueprint $table) {
          $table->integer('alumno_id')->unsigned();
          $table->integer('citas_id')->unsigned();

          $table->foreign('alumno_id')->references('id')->on('alumno')
                ->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('citas_id')->references('id')->on('cita')
              ->onUpdate('cascade')->onDelete('cascade');
          $table->timestamps();



    });*/
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::drop('cita');
    //            Schema::drop('citas_alumno');
    }
}
