<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
          'name' => "administrativo",
          //'area_de_trabajo' => "Personal Administrativo",
          'email' => "administrativo@gmail.com",
          //'role' => 'admin',
          'password' => bcrypt('1234567'),
          'roles' => "administrativo",
          'created_at' => $faker->dateTime(),
          'updated_at' => $faker->dateTime()
      ]);
      $faker = Faker::create();
      DB::table('users')->insert([
        'name' => "Salud",
        //'area_de_trabajo' => "Personal Administrativo",
        'email' => "salud@gmail.com",
        //'role' => 'admin',
        'password' => bcrypt('1234567'),
        'roles' => "salud",
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ]);
    $faker = Faker::create();
    DB::table('users')->insert([
      'name' => "Educador",
      //'area_de_trabajo' => "Personal Administrativo",
      'email' => "educador@gmail.com",
      //'role' => 'admin',
      'password' => bcrypt('1234567'),
      'roles' => "educador",
      'created_at' => $faker->dateTime(),
      'updated_at' => $faker->dateTime()
  ]);

    /*  DB::table('roles')->insert([
        'name' => "admin",
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
      ]);*/

    }
}
