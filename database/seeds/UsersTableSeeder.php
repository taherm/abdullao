<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$.NVY8CDjp5Np3zTqc91k1OgkpJXi076nusKk7fKksJsqgS28/e5Ge',
                'remember_token' => 'TFov4zmDvd5CjdYoetzs3dr7c0b9Dli7OQgBTBFuA3Cmy1W9sdq6OtuZjtwP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}