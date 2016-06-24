<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('roles')->insert([
        'name' => "administrativo"
      ]);
      DB::table('roles')->insert([
        'name' => "salud"
      ]);
      DB::table('roles')->insert([
        'name' => "educador"
      ]);


    }
}
