<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
 
    // use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

       // \App\Models\Noticia::factory(15)->create();

       $this->call([
        UserSeeder::class,
        // PostSeeder::class,
        // CommentSeeder::class,
    ]);
    }
}
