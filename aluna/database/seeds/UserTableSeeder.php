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
          'name' => "Javier",
          //'area_de_trabajo' => "Personal Administrativo",
          'email' => "javiergaliver@gmail.com",
          //'role' => 'admin',
          'password' => bcrypt('1234567'),
          'created_at' => $faker->dateTime(),
          'updated_at' => $faker->dateTime()
      ]);
      $faker = Faker::create();
      DB::table('users')->insert([
        'name' => "Cecilia",
        //'area_de_trabajo' => "Personal Administrativo",
        'email' => "cecilia@gmail.com",
        //'role' => 'admin',
        'password' => bcrypt('1234567'),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ]);
    $faker = Faker::create();
    DB::table('users')->insert([
      'name' => "Jairo",
      //'area_de_trabajo' => "Personal Administrativo",
      'email' => "jairo@gmail.com",
      //'role' => 'admin',
      'password' => bcrypt('1234567'),
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
