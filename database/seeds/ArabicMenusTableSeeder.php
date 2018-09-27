<?php

use Illuminate\Database\Seeder;

class ArabicmenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('arabicmenus')->delete();
        
        \DB::table('arabicmenus')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'الدورات',
                'created_at' => '2018-09-24 15:34:10',
                'updated_at' => '2018-09-24 15:34:10',
            ),
        ));
        
        
    }
}