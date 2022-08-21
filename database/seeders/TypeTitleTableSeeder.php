<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTitleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('type_title')->delete();
        
        DB::table('type_title')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'Série',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'Filme',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'Curta',
            ),
        ));
        
        
    }
}