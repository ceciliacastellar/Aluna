<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('alumno')->insert([
      'nombres' => "Cecilia Alejandra",
      'apellidos' => "Castellar Bustillo",
      'tipo_documento' => "C.C",
      'numero_documento' => "1168262483",
      'fecha_nacimiento' => "01/07/1989",
      'departamento' => "Bolivar",
      'municipio' =>  "Cartagena",
      'edad' => "26",
      'direccion_residencia' => "avenida siempre viva 123",
      'nombre_persona' => "Laura",
      'apellido_persona' => "Castellar",
      'parentesco' => "hermana",
      'nombre_padre' => "Javier",
      'apellido_padre' => "Castellar",
      'tipo_documentop' => "C.C",
      'numero_documentop' => "1128060687",
      'direccion_padre' => "avenida siempre viva 123",
      'tel_padre' => "6642707",
      'dir_trabajop' => "no tiene",
      'tel_trabajop' => "6642707",
      'nombre_madre' => "Zully",
      'apellido_madre' => "Bustillo",
      'tipo_documentom' => "C.C",
      'numero_documentom' => "1128060647",
      'direccion_madre' => "avenida siempre viva 123",
      'tel_madre' => "6642707",
      'dir_trabajom' => "no tiene",
      'tel_trabajom' => "6642707",
      'nombre_acudiente' => "Javier",
      'apellido_acudiente' => "Castelar Bustillo",
      'tipo_documentopa' => "C.C",
      'numero_documentoa' => "1128060627",
      'direccion_acudiente' => "avenida siempre viva 123",
      'tel_acudiente' => "6642707",
      'dir_trabajoa' => "no tiene",
      'tel_trabajoa' => "6642707",
      'nombre_emergencia' => "Javier",
      'apellido_emergencia' => "Galindo Vergel",

      'direccion_emergencia' => "Crespo",
      'tel_emergencia' => "3173796062",
      'tel_trabajoe' => "3173796062",
      'fecha_matricula' => "22/04/2016",
      'convenio' => "ICBF",
      'modulo' => "Azul",
      'programa' => "Delfin",



      //'role' => 'admin',

      'created_at' => $faker->dateTime(),
      'updated_at' => $faker->dateTime()

      ]);
    }
}
