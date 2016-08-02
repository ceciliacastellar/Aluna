<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFisioterapiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('fisioterapia', function (Blueprint $table) {
      $table->string('alerta')->nullable();
      $table->string('orientado')->nullable();
      $table->string('lenguaje')->nullable();
      $table->string('sensopercepcion')->nullable();
      $table->string('alteracion_pares_craneales')->nullable();
      $table->string('cual_pares')->nullable();
      $table->string('trofismo')->nullable();
      $table->string('tono')->nullable();
      $table->string('distribucion')->nullable();
      $table->string('reflejos')->nullable();
      $table->string('signos')->nullable();
      $table->string('sensibilidad_superficial')->nullable();
      $table->string('sensibilidad_profunda')->nullable();
      $table->string('control_cabeza')->nullable();
      $table->string('control_tronco')->nullable();
      $table->string('progresiones_posicionales')->nullable();
      $table->string('rolados')->nullable();
      $table->string('reacciones')->nullable();
      $table->string('cuales_reaccioness')->nullable();
      $table->string('como_hace_desplaza')->nullable();
      $table->string('pelvis')->nullable();
      $table->string('alteracion_pelvis')->nullable();
      $table->string('cual_alteracion_pelvis')->nullable();
      $table->string('alteracion_postura')->nullable();
      $table->string('cual_alteracion_postura')->nullable();
      $table->string('restricciones')->nullable();
      $table->string('donde_restricciones')->nullable();
      $table->string('pruebas_especiales')->nullable();
      $table->string('cuales_pruebas_especiales')->nullable();
      $table->string('deformaciones')->nullable();
      $table->string('cuales_deformaciones')->nullable();
      $table->string('mid')->nullable();
      $table->string('mii')->nullable();
      $table->string('torsion_tibial')->nullable();
      $table->string('torsion_tibial2')->nullable();
      $table->string('patron_respiratorio')->nullable();
      $table->string('auscultacion')->nullable();
      $table->string('camina_punta')->nullable();
      $table->string('camina_talones')->nullable();
      $table->string('camina_atras')->nullable();
      $table->string('camina_lados')->nullable();
      $table->string('camina_cuclillas')->nullable();
      $table->string('camina_equilibrio')->nullable();
      $table->string('sostiene_pie')->nullable();
      $table->string('escaleras')->nullable();
      $table->string('rampa')->nullable();
      $table->string('corre')->nullable();
      $table->string('salta')->nullable();
      $table->string('obstaculos')->nullable();
      $table->string('lanza')->nullable();
      $table->string('atrapa')->nullable();
      $table->string('patea')->nullable();
      $table->string('nivel')->nullable();
      $table->string('fisioterapeutico')->nullable();
      $table->string('motor')->nullable();
      $table->string('recomendaciones1')->nullable();
      $table->string('recomendaciones2')->nullable();
      $table->string('recomendaciones3')->nullable();
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
        Schema::drop('fisioterapia');
    }
}
