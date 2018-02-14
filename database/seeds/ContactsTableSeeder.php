<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contacts')->insert([
          'name' => 'example',
          'email' => 'example@gmail.com',
          'phone' => +75555555555,
      ]);
    }
}
