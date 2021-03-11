<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MyPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        //
        Model::unguard();

        $permissions = array (
            0  =>
                array (
                    'id'         => 1,
                    'key'        => 'browse_admin',
                    'table_name' => NULL,
                ),
            1  =>
                array (
                    'id'         => 2,
                    'key'        => 'browse_bread',
                    'table_name' => NULL,
                ),
            2  =>
                array (
                    'id'         => 3,
                    'key'        => 'browse_database',
                    'table_name' => NULL,
                ),
            3  =>
                array (
                    'id'         => 4,
                    'key'        => 'browse_media',
                    'table_name' => NULL,
                ),
            4  =>
                array (
                    'id'         => 5,
                    'key'        => 'browse_compass',
                    'table_name' => NULL,
                ),
            5  =>
                array (
                    'id'         => 6,
                    'key'        => 'browse_menus',
                    'table_name' => 'menus',
                ),
            6  =>
                array (
                    'id'         => 7,
                    'key'        => 'read_menus',
                    'table_name' => 'menus',
                ),
            7  =>
                array (
                    'id'         => 8,
                    'key'        => 'edit_menus',
                    'table_name' => 'menus',
                ),
            8  =>
                array (
                    'id'         => 9,
                    'key'        => 'add_menus',
                    'table_name' => 'menus',
                ),
            9  =>
                array (
                    'id'         => 10,
                    'key'        => 'delete_menus',
                    'table_name' => 'menus',
                ),
            10 =>
                array (
                    'id'         => 11,
                    'key'        => 'browse_roles',
                    'table_name' => 'roles',
                ),
            11 =>
                array (
                    'id'         => 12,
                    'key'        => 'read_roles',
                    'table_name' => 'roles',
                ),
            12 =>
                array (
                    'id'         => 13,
                    'key'        => 'edit_roles',
                    'table_name' => 'roles',
                ),
            13 =>
                array (
                    'id'         => 14,
                    'key'        => 'add_roles',
                    'table_name' => 'roles',
                ),
            14 =>
                array (
                    'id'         => 15,
                    'key'        => 'delete_roles',
                    'table_name' => 'roles',
                ),
            15 =>
                array (
                    'id'         => 16,
                    'key'        => 'browse_users',
                    'table_name' => 'users',
                ),
            16 =>
                array (
                    'id'         => 17,
                    'key'        => 'read_users',
                    'table_name' => 'users',
                ),
            17 =>
                array (
                    'id'         => 18,
                    'key'        => 'edit_users',
                    'table_name' => 'users',
                ),
            18 =>
                array (
                    'id'         => 19,
                    'key'        => 'add_users',
                    'table_name' => 'users',
                ),
            19 =>
                array (
                    'id'         => 20,
                    'key'        => 'delete_users',
                    'table_name' => 'users',
                ),
            20 =>
                array (
                    'id'         => 21,
                    'key'        => 'browse_settings',
                    'table_name' => 'settings',
                ),
            21 =>
                array (
                    'id'         => 22,
                    'key'        => 'read_settings',
                    'table_name' => 'settings',
                ),
            22 =>
                array (
                    'id'         => 23,
                    'key'        => 'edit_settings',
                    'table_name' => 'settings',
                ),
            23 =>
                array (
                    'id'         => 24,
                    'key'        => 'add_settings',
                    'table_name' => 'settings',
                ),
            24 =>
                array (
                    'id'         => 25,
                    'key'        => 'delete_settings',
                    'table_name' => 'settings',
                ),
            25 =>
                array (
                    'id'         => 26,
                    'key'        => 'browse_hooks',
                    'table_name' => NULL,
                ),
            26 =>
                array (
                    'id'         => 27,
                    'key'        => 'browse_categories',
                    'table_name' => 'categories',
                ),
            27 =>
                array (
                    'id'         => 28,
                    'key'        => 'read_categories',
                    'table_name' => 'categories',
                ),
            28 =>
                array (
                    'id'         => 29,
                    'key'        => 'edit_categories',
                    'table_name' => 'categories',
                ),
            29 =>
                array (
                    'id'         => 30,
                    'key'        => 'add_categories',
                    'table_name' => 'categories',
                ),
            30 =>
                array (
                    'id'         => 31,
                    'key'        => 'delete_categories',
                    'table_name' => 'categories',
                ),
            31 =>
                array (
                    'id'         => 32,
                    'key'        => 'browse_posts',
                    'table_name' => 'posts',
                ),
            32 =>
                array (
                    'id'         => 33,
                    'key'        => 'read_posts',
                    'table_name' => 'posts',
                ),
            33 =>
                array (
                    'id'         => 34,
                    'key'        => 'edit_posts',
                    'table_name' => 'posts',
                ),
            34 =>
                array (
                    'id'         => 35,
                    'key'        => 'add_posts',
                    'table_name' => 'posts',
                ),
            35 =>
                array (
                    'id'         => 36,
                    'key'        => 'delete_posts',
                    'table_name' => 'posts',
                ),
            36 =>
                array (
                    'id'         => 37,
                    'key'        => 'browse_pages',
                    'table_name' => 'pages',
                ),
            37 =>
                array (
                    'id'         => 38,
                    'key'        => 'read_pages',
                    'table_name' => 'pages',
                ),
            38 =>
                array (
                    'id'         => 39,
                    'key'        => 'edit_pages',
                    'table_name' => 'pages',
                ),
            39 =>
                array (
                    'id'         => 40,
                    'key'        => 'add_pages',
                    'table_name' => 'pages',
                ),
            40 =>
                array (
                    'id'         => 41,
                    'key'        => 'delete_pages',
                    'table_name' => 'pages',
                ),
        );

        foreach ($permissions as $permission) {
            DB::table('permissions')->insert($permission);
        }
    }
}
