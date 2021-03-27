<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
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


        $categories =
            array(
                0 => array('name' => 'Đồng hồ nam', 'parent_id' => '0'),
                1 => array('name' => 'Đồng hồ nữ', 'parent_id' => '0'),
                2 => array('name' => 'Đồng hồ đôi', 'parent_id' => '0'),
                3 => array('name' => 'Đồng hồ trẻ em', 'parent_id' => '0'),
                4 => array('name' => 'Đồng hồ Philips', 'parent_id' => '1'),
                5 => array('name' => 'Đồng hồ Epos swi', 'parent_id' => '1'),
                6 => array('name' => 'Đồng hồ Eries go', 'parent_id' => '1'),
                7 => array('name' => 'Đồng hồ Citizen', 'parent_id' => '1'),
                8 => array('name' => 'Đồng hồ Tourbill', 'parent_id' => '1'),
                9 => array('name' => 'Đồng hồ Du manoir', 'parent_id' => '1'),
                10 => array('name' => 'Đồng hồ nữ Casio', 'parent_id' => '2'),
                11 => array('name' => 'Đồng hồ nữ QQ', 'parent_id' => '2'),
                12 => array('name' => 'Đồng hồ Orginal', 'parent_id' => '2'),
                13 => array('name' => 'Đồng hồ Fosill', 'parent_id' => '2'),
                14 => array('name' => 'Đồng hồ Maceur', 'parent_id' => '2'),
                15 => array('name' => 'Đồng hồ Seiko', 'parent_id' => '2'),
                16 => array('name' => 'Đồng hồ đôi Eros', 'parent_id' => '3'),
                17 => array('name' => 'Đông ht_description', 'parent_id' => '3'),
                18 => array('name' => 'Đồng hồ đôi Casio', 'parent_id' => '3'),
                19 => array('name' => 'Đồng hồ đôi Emoji', 'parent_id' => '3'),
                20 => array('name' => 'Đồng hồ Omega', 'parent_id' => '3'),
                21 => array('name' => 'Đồng hồ Kazien', 'parent_id' => '3'),
                22 => array('name' => 'Đồng hồ báo thức', 'parent_id' => '4'),
                23 => array('name' => 'Đồng hồ định vị', 'parent_id' => '4'),
                24 => array('name' => 'Đồng hồ định vị 1', 'parent_id' => '4'),
                25 => array('name' => 'Đồng hồ sức khỏe', 'parent_id' => '4'),
                26 => array('name' => 'Đồng hồ để bàn', 'parent_id' => '4'),
                27 => array('name' => 'Đồng hồ đồ chơi', 'parent_id' => '4'),
            );;
        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['name']);
            DB::table('categories')->insert($category);
        }
    }
}
