<?php

namespace Database\Seeders;

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
                'name' => NULL,
                'email' => 'michael@email.com',
                'password' => '$2y$10$ZIRMSqQNLOyO3m52qZAAyOR8Aih6TL591oY.wmQEokRmkF1ok7iAi',
                'twitter_id' => NULL,
                'google_id' => NULL,
                'created_at' => '2022-08-22 22:54:04',
                'updated_at' => '2022-08-22 22:54:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}