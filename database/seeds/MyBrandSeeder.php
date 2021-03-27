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
                0 => array('br_name' => 'Apple', 'br_description' => '', 'br_logo' => 'brands/March2021/brand0.png'),
                1 => array('br_name' => 'Fitbit', 'br_description' => '', 'br_logo' => 'brands/March2021/brand1.png'),
                2 => array('br_name' => 'Gearfit', 'br_description' => '', 'br_logo' => 'brands/March2021/brand2.png'),
                3 => array('br_name' => 'Huawei', 'br_description' => '', 'br_logo' => 'brands/March2021/brand3.png'),
                4 => array('br_name' => 'Samsung', 'br_description' => '', 'br_logo' => 'brands/March2021/brand4.png'),
                5 => array('br_name' => 'Xiaomi', 'br_description' => '', 'br_logo' => 'brands/March2021/brand5.png'),
            );
        foreach ($brands as $brand) {
            $brand[ 'created_at' ] = now();
            $brand[ 'updated_at' ] = now();
            DB::table('brands')->insert($brand);
        }
    }
}
