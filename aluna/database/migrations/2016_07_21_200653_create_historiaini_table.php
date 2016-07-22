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
        $table->string('edad_padre')->nullable();
        $table->string('trabajo')->nullable();
        $table->string('edad_madre')->nullable();
        $table->string('trabajo_madre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();
        $table->string('tel_padre')->nullable();



        $table->timestamps();
      });
  }
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
