<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Email' => 'ismaelsantos@hotmail.com',
            'Name' => 'Administrator',
            'Password' => bcrypt('123456789'),
          
            ]);


            DB::table('users')->insert([
                'Email' => 'greiminunez@gmail.com',
                'Name' => 'Administrator',
                'Password' => bcrypt('123456789'),
            
                ]);
    }
}
