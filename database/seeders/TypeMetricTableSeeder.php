<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeMetricTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('type_metric')->delete();

        DB::table('type_metric')->insert(array (
            0 =>
            array (
                'id' => 1,
                'action' => 'criou',
                'created_at' => '2022-08-22 20:24:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'action' => 'clicou',
                'created_at' => '2022-08-22 20:24:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'action' => 'assistiu',
                'created_at' => '2022-08-22 20:24:40',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'action' => 'favoritou',
                'created_at' => '2022-08-22 20:24:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'action' => 'removeu',
                'created_at' => '2022-08-22 20:24:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'action' => 'amou',
                'created_at' => '2022-08-22 20:24:48',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
