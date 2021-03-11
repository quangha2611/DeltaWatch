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

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permission_role')->truncate();
        DB::table('permissions')->truncate();
        DB::table('user_roles')->truncate();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('posts')->truncate();
        DB::table('categories')->truncate();
        DB::table('products')->truncate();
        DB::table('providers')->truncate();
        DB::table('brands')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(MyPermissionSeeder::class);
        $this->call(MyRoleSeeder::class);
        $this->call(MyUserSeeder::class);
        $this->call(MyPermissionRoleSeeder::class);
        $this->call(MyUserRoleSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(MyProductSeeder::class);
        $this->call(MyProviderSeeder::class);
        $this->call(MyBrandSeeder::class);
        $this->call(MyPostSeeder::class);

    }
}
