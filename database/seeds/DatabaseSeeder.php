<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            ArabicmenusTableSeeder::class,
            ArabicservicesTableSeeder::class,
            SlidersTableSeeder::class,
            UsersTableSeeder::class,
            AlbumsTableSeeder::class
        ]);
       
     
    }
}

