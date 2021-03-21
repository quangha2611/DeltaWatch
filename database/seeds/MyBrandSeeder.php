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


        $brands =
            array(
                0 => array('id' => '1', 'br_name' => 'Apple', 'br_description' => '', 'br_logo' => 'brands/March2021/brand0.png'),
                1 => array('id' => '2', 'br_name' => 'Fitbit', 'br_description' => '', 'br_logo' => 'brands/March2021/brand1.png'),
                2 => array('id' => '3', 'br_name' => 'Gearfit', 'br_description' => '', 'br_logo' => 'brands/March2021/brand2.png'),
                3 => array('id' => '4', 'br_name' => 'Huawei', 'br_description' => '', 'br_logo' => 'brands/March2021/brand3.png'),
                4 => array('id' => '5', 'br_name' => 'Samsung', 'br_description' => '', 'br_logo' => 'brands/March2021/brand4.png'),
                5 => array('id' => '6', 'br_name' => 'Xiaomi', 'br_description' => '', 'br_logo' => 'brands/March2021/brand5.png'),
            );
        foreach ($brands as $brand) {
            $brand[ 'created_at' ] = now();
            $brand[ 'updated_at' ] = now();
            DB::table('brands')->insert($brand);
        }
    }
}
