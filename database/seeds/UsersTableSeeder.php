<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'example',
          'email' => 'example@gmail.com',
          'password' => '$2y$10$FpTg5B5yjrqYgB7s3N1Upe.5bHBevJFH6/wj4dFNPtOID2KHRPIRy',
      ]);
    }
}
