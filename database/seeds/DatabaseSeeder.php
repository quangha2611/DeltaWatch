<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        DB::table('products')->truncate();
        DB::table('providers')->truncate();
        DB::table('brands')->truncate();
        DB::table('categories')->truncate();
        DB::table('posts')->truncate();

        $this->call(MyProductSeeder::class);
        $this->call(MyProviderSeeder::class);
        $this->call(MyBrandSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(MyPostSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MyCustomerSeeder::class);
    }
}
