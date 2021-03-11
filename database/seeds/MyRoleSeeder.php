<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MyRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Model::unguard();

        $roles =
            array (
                0 =>
                    array (
                        'id' => 1,
                        'name' => 'admin',
                        'display_name' => 'Super Admin',
                    ),
                1 =>
                    array (
                        'id' => 2,
                        'name' => 'user',
                        'display_name' => 'Normal User',
                    ),
            );
        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        }
    }
}
