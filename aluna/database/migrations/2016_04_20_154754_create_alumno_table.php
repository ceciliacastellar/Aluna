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
          $table->string('nombres');
          $table->string('apellidos');
          $table->string('tipo_documento');
          $table->string('numero_documento');
          $table->string('fecha_nacimiento');
          $table->string('departamento');
          $table->string('municipio');
          $table->string('edad');
          $table->string('direccion_residencia');
        //  $table->string('nombre_persona');
          $table->string('apellido_persona');
          $table->string('parentesco');
          $table->string('nombre_padre');
          $table->string('apellido_padre');
          $table->string('tipo_documentop');
          $table->string('numero_documentop');
          $table->string('direccion_padre');
          $table->string('tel_padre');
          $table->string('dir_trabajop');
          $table->string('tel_trabajop');
          $table->string('nombre_madre');
          $table->string('apellido_madre');
          $table->string('tipo_documentom');
          $table->string('numero_documentom');
          $table->string('direccion_madre');
          $table->string('tel_madre');
          $table->string('dir_trabajom');
          $table->string('tel_trabajom');
          $table->string('nombre_acudiente');
          $table->string('apellido_acudiente');
          $table->string('tipo_documentopa');
          $table->string('numero_documentoa');
          $table->string('direccion_acudiente');
          $table->string('tel_acudiente');
          $table->string('dir_trabajoa');
          $table->string('tel_trabajoa');
          $table->string('nombre_emergencia');
          $table->string('apellido_emergencia');
          $table->string('tipo_documentope');
          $table->string('numero_documentoe');
          $table->string('direccion_emergencia');
          $table->string('tel_emergencia');
          $table->string('dir_trabajoe');
          $table->string('tel_trabajoe');
          $table->string('fecha_matricula');
          $table->string('convenio');
          $table->string('modulo');
          $table->string('programa');
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
