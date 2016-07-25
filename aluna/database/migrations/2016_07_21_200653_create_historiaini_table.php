<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriainiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('historiaini', function (Blueprint $table) {
        $table->increments('id');
        $table->string('diagnostico')->nullable();
        $table->string('perfil')->nullable();
        $table->string('remitido')->nullable();
        $table->string('escolarizacion')->nullable();
        $table->string('subsidio')->nullable();
        $table->string('nivel')->nullable();
        $table->string('contributivo')->nullable();
        $table->string('eps')->nullable();
        $table->string('cual_inicial')->nullable();
        $table->string('trabajo')->nullable();
        $table->string('edad_padre')->nullable();
        $table->string('edad_madre')->nullable();
        $table->string('trabajo_madre')->nullable();
        $table->string('motivo_consulta')->nullable();
        $table->string('inicio_curso_evolucion')->nullable();
        $table->string('sosten_cabeza')->nullable();
        $table->string('gateo')->nullable();
        $table->string('sedestacion')->nullable();
        $table->string('camino')->nullable();
        $table->string('lateralidad')->nullable();
        $table->string('descripcion_actual')->nullable();
        $table->string('balbuceo')->nullable();
        $table->string('primera_palabra')->nullable();
        $table->string('primera_frase')->nullable();
        $table->string('desarrollo_personal')->nullable();
        $table->string('mapa_familiar')->nullable();
        $table->string('aspectos_ psicosociales_ambientales')->nullable();
        $table->string('duracion_embarazo')->nullable();
        $table->string('controles')->nullable();
        $table->string('aborto')->nullable();
        $table->string('caidas')->nullable();
        $table->string('consumo_alcohol')->nullable();
        $table->string('fumo')->nullable();
        $table->string('enfermedades')->nullable();
        $table->string('cuales_enfermedades')->nullable();
        $table->string('tomo_medicamentos')->nullable();
        $table->string('cuales_medicamentos')->nullable();
        $table->string('observaciones')->nullable();
        $table->string('parto_vaginal')->nullable();
        $table->string('cesaria')->nullable();
        $table->string('forceps')->nullable();
        $table->string('desarrolo_parto')->nullable();
        $table->string('observaciones_parto')->nullable();
        $table->string('convulsiones')->nullable();
        $table->string('primera_crisis')->nullable();
        $table->string('ultima_crisis')->nullable();
        $table->string('cirugias')->nullable();
        $table->string('cuales_cirugias')->nullable();
        $table->string('familiares')->nullable();
        $table->string('cuales_familiares')->nullable();
        $table->string('otros')->nullable();
        $table->string('cuales_otros')->nullable();
        $table->string('examenes_especializados')->nullable();
        $table->string('pedagogicos')->nullable();
        $table->string('terapeuticos')->nullable();
        $table->string('farmacologicos')->nullable();
        $table->string('expectativas')->nullable();
        $table->string('plan_trabajo')->nullable();
        $table->integer('alumno_id')->unsigned();
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
        Schema::drop('historiaini');
    }
}
