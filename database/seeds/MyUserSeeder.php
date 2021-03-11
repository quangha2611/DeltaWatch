<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class MyUserSeeder extends Seeder
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

        $users =
            array(
                0 => array('id' => '1', 'role_id' => 1, 'name' => 'admin', 'email' => 'admin@gmail.com'),
            );
        foreach ($users as $user) {
            $user['password'] = Hash::make('password');
            DB::table('users')->insert($user);
        }
    }
}
