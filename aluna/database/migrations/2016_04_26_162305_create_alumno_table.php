<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
          $table->increments('id');
          $table->string('file')->nullable();
          $table->string('nombres');
          $table->string('apellidos');
          $table->string('tipo_documento');
          $table->string('numero_documento')->unique();
          $table->string('fecha_nacimiento')->nullable();
          $table->string('departamento')->nullable();
          $table->string('municipio')->nullable();
          $table->string('edad')->nullable();
          $table->string('direccion_residencia')->nullable();
          $table->string('nombre_persona')->nullable();
          $table->string('apellido_persona')->nullable();
          $table->string('parentesco')->nullable();
          $table->string('nombre_padre')->nullable();
          $table->string('apellido_padre')->nullable();
          $table->string('tipo_documentop')->nullable();
          $table->string('numero_documentop')->nullable();
          $table->string('direccion_padre')->nullable();
          $table->string('tel_padre')->nullable();
          $table->string('dir_trabajop')->nullable();
          $table->string('tel_trabajop')->nullable();
          $table->string('nombre_madre')->nullable();
          $table->string('apellido_madre')->nullable();
          $table->string('tipo_documentom')->nullable();
          $table->string('numero_documentom')->nullable();
          $table->string('direccion_madre')->nullable();
          $table->string('tel_madre')->nullable();
          $table->string('dir_trabajom')->nullable();
          $table->string('tel_trabajom')->nullable();
          $table->string('nombre_acudiente')->nullable();
          $table->string('apellido_acudiente')->nullable();
          $table->string('tipo_documentopa')->nullable();
          $table->string('numero_documentoa')->nullable();
          $table->string('direccion_acudiente')->nullable();
          $table->string('tel_acudiente')->nullable();
          $table->string('dir_trabajoa')->nullable();
          $table->string('tel_trabajoa')->nullable();
          $table->string('nombre_emergencia')->nullable();
          $table->string('apellido_emergencia')->nullable();
          $table->string('tipo_documentope')->nullable();
          $table->string('numero_documentoe')->nullable();
          $table->string('direccion_emergencia')->nullable();
          $table->string('tel_emergencia')->nullable();
          $table->string('dir_trabajoe')->nullable();
          $table->string('tel_trabajoe')->nullable();
          $table->string('fecha_matricula')->nullable();
          $table->string('convenio')->nullable();
          $table->string('modulo')->nullable();
          $table->string('programa')->nullable();
          $table->string('fisio')->nullable();
          $table->string('equino')->nullable();
          $table->string('talleres')->nullable();
          $table->string('fono')->nullable();
          $table->string('psico')->nullable();
          $table->string('terapia_acuatica')->nullable();
          $table->string('terapia_ocupacional')->nullable();
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
        Schema::drop('alumno');
    }
}
