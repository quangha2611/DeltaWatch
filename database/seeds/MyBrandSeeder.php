<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MyBrandSeeder extends Seeder
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

        DB::table('brands')->truncate();

        $brands =
            array(
                0 => array('id' => '1', 'br_name' => 'Apple', 'br_description' => '', 'br_logo' => ''),
                1 => array('id' => '2', 'br_name' => 'Fitbit', 'br_description' => '', 'br_logo' => ''),
                2 => array('id' => '3', 'br_name' => 'Gearfit', 'br_description' => '', 'br_logo' => ''),
                3 => array('id' => '4', 'br_name' => 'Huawei', 'br_description' => '', 'br_logo' => ''),
                4 => array('id' => '5', 'br_name' => 'Samsung', 'br_description' => '', 'br_logo' => ''),
                5 => array('id' => '6', 'br_name' => 'Xiaomi', 'br_description' => '', 'br_logo' => ''),
            );
        foreach ($brands as $brand) {
            DB::table('brands')->insert($brand);
        }
    }
}
