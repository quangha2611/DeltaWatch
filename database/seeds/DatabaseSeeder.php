<?php

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
        $this->call(CategoriesTableSeeder::class);
        $this->call(MyProductSeeder::class);
        $this->call(MyProviderSeeder::class);
        $this->call(MyBrandSeeder::class);
    }
}
