<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(TypeTitleTableSeeder::class);
        $this->call(TitlesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MylistTableSeeder::class);
        $this->call(TypeMetricTableSeeder::class);
    }
}
