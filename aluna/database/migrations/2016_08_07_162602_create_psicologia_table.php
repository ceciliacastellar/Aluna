<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsicologiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('psicologia', function (Blueprint $table) {
        $table->increments('id');
        $table->string('porte_actitud')->nullable();
        $table->string('conciencia')->nullable();
        $table->string('orientacion')->nullable();
        $table->string('atencion')->nullable();
        $table->string('memoria')->nullable();
        $table->string('inteligencia')->nullable();
        $table->string('psicomotora')->nullable();
        $table->string('afecto')->nullable();
        $table->string('pensamiento')->nullable();
        $table->string('lenguaje_comunicacion')->nullable();
        $table->string('sensopercepcion')->nullable();
        $table->string('juicio')->nullable();
        $table->string('prospeccion')->nullable();
        $table->string('introspeccion')->nullable();
        $table->string('procesos_cognitivos')->nullable();
        $table->string('conocimientos_academicos')->nullable();
        $table->string('socializacion_juego')->nullable();
        $table->string('sexualidad_desarrollo')->nullable();
        $table->string('repertorio_conductal')->nullable();
        $table->string('recomendaciones')->nullable();
        $table->integer('alumno_id')->unsigned()->unique();
        $table->foreign('alumno_id')->references('id')->on('alumno')
              ->onUpdate('cascade')->onDelete('cascade');
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
       Schema::drop('psicologia');
    }
}
