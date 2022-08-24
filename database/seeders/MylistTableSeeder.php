<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MylistTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('mylist')->delete();

        DB::table('mylist')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'title_id' => 1,
                'created_at' => '2022-08-22 20:11:50',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 1,
                'title_id' => 2,
                'created_at' => '2022-08-22 20:11:53',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 1,
                'title_id' => 3,
                'created_at' => '2022-08-22 20:11:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 1,
                'title_id' => 4,
                'created_at' => '2022-08-22 20:11:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 1,
                'title_id' => 5,
                'created_at' => '2022-08-22 20:12:06',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 1,
                'title_id' => 6,
                'created_at' => '2022-08-22 20:12:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 1,
                'title_id' => 7,
                'created_at' => '2022-08-22 20:17:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 1,
                'title_id' => 8,
                'created_at' => '2022-08-22 20:17:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 1,
                'title_id' => 9,
                'created_at' => '2022-08-22 20:17:09',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'user_id' => 1,
                'title_id' => 10,
                'created_at' => '2022-08-22 20:17:11',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
