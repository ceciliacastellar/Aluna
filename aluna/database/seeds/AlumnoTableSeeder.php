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
      'lugar_nacimiento' => "Cartagena",
      'edad' => str_random(10)."26",
      'direccion_residencia' => "avenida siempre viva 123",
      'nombre_persona' => "Laura",
      'apellido_persona' => "Castellar",
      'parentesco' => "hermana",
      'nombre_padre' => str_random(10).'_1',
      'apellido_padre' => str_random(10).'_1',
      'tipo_documentop' => str_random(10).'_1',
      'numero_documentop' => str_random(10).'_1',
      'direccion_padre' => str_random(10).'_1',
      'tel_padre' => str_random(10).'_1',
      'dir_trabajop' => str_random(10).'_1',
      'tel_trabajop' => str_random(10).'_1',
      'nombre_madre' => str_random(10).'_1',
      'apellido_madre' => str_random(10).'_1',
      'tipo_documentom' => str_random(10).'_1',
      'numero_documentom' => str_random(10).'_1',
      'direccion_madre' => str_random(10).'_1',
      'tel_madre' => str_random(10).'_1',
      'dir_trabajom' => str_random(10).'_1',
      'tel_trabajom' => str_random(10).'_1',
      'nombre_acudiente' => str_random(10).'_1',
      'apellido_acudiente' => str_random(10).'_1',
      'tipo_documentopa' => str_random(10).'_1',
      'numero_documentoa' => str_random(10).'_1',
      'direccion_acudiente' => str_random(10).'_1',
      'tel_acudiente' => str_random(10).'_1',
      'dir_trabajoa' => str_random(10).'_1',
      'tel_trabajoa' => str_random(10).'_1',
      'nombre_emergencia' => str_random(10).'_1',
      'apellido_emergencia' => str_random(10).'_1',
      'tipo_documentope' => str_random(10).'_1',
      'numero_documentoe' => str_random(10).'_1',
      'direccion_emergencia' => str_random(10).'_1',
      'tel_emergencia' => str_random(10).'_1',
      'dir_trabajoe' => str_random(10).'_1',
      'tel_trabajoe' => str_random(10).'_1',
      'fecha_matricula' => str_random(10).'_1',
      'convenio' => str_random(10).'_1',
      'modulo' => str_random(10).'_1',
      'programa' => str_random(10).'_1',



      //'role' => 'admin',

      'created_at' => $faker->dateTime(),
      'updated_at' => $faker->dateTime()

      ]);
    }
}
