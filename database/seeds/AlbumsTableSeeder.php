<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('albums')->delete();
        
        \DB::table('albums')->insert(array (
            0 => 
            array (
                'id' => 11,
                'image' => '5105746f769b0f89a31cf7121c66d105.jpg',
                'created_at' => '2018-09-29 13:25:09',
                'updated_at' => '2018-09-29 13:25:09',
            ),
            1 => 
            array (
                'id' => 12,
                'image' => '484017b96be9079d309dee3da57037bf.jpg',
                'created_at' => '2018-09-29 13:25:18',
                'updated_at' => '2018-09-29 13:25:18',
            ),
            2 => 
            array (
                'id' => 13,
                'image' => '2726965797e044c26e153dcd8ccdcef2.jpg',
                'created_at' => '2018-09-29 13:25:21',
                'updated_at' => '2018-09-29 13:25:21',
            ),
            3 => 
            array (
                'id' => 14,
                'image' => '6c2da339d11cb5657bf2cc9550905293.jpg',
                'created_at' => '2018-09-29 13:25:24',
                'updated_at' => '2018-09-29 13:25:24',
            ),
            4 => 
            array (
                'id' => 15,
                'image' => '3e0f618234524c2c8578c58be9a27865.jpg',
                'created_at' => '2018-09-29 13:25:27',
                'updated_at' => '2018-09-29 13:25:27',
            ),
            5 => 
            array (
                'id' => 16,
                'image' => 'e627d06d2ca3f106ded509c6abaf3a3a.jpg',
                'created_at' => '2018-09-29 13:25:30',
                'updated_at' => '2018-09-29 13:25:30',
            ),
        ));
        
        
    }
}