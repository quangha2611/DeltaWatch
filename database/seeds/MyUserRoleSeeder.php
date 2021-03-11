<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class MyUserRoleSeeder extends Seeder
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


        $userRoles =
            array(
                0 => array('user_id' => 1, 'role_id' => 1),
            );
        foreach ($userRoles as $userRole) {
            DB::table('user_roles')->insert($userRole);
        }
    }
}
