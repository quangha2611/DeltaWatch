<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //
        Model::unguard();


        $categories =
            array(
                0 => array('id' => '1', 'name' => 'Đồng hồ nam', 'parent_id' => '0'),
                1 => array('id' => '2', 'name' => 'Đồng hồ nữ', 'parent_id' => '0'),
                2 => array('id' => '3', 'name' => 'Đồng hồ đôi', 'parent_id' => '0'),
                3 => array('id' => '4', 'name' => 'Đồng hồ trẻ em', 'parent_id' => '0'),
                4 => array('id' => '5', 'name' => 'Đồng hồ Philips', 'parent_id' => '1'),
                5 => array('id' => '6', 'name' => 'Đồng hồ Epos swi', 'parent_id' => '1'),
                6 => array('id' => '7', 'name' => 'Đồng hồ Eries go', 'parent_id' => '1'),
                7 => array('id' => '8', 'name' => 'Đồng hồ Citizen', 'parent_id' => '1'),
                8 => array('id' => '9', 'name' => 'Đồng hồ Tourbill', 'parent_id' => '1'),
                9 => array('id' => '10', 'name' => 'Đồng hồ Du manoir', 'parent_id' => '1'),
                10 => array('id' => '11', 'name' => 'Đồng hồ nữ Casio', 'parent_id' => '2'),
                11 => array('id' => '12', 'name' => 'Đồng hồ nữ QQ', 'parent_id' => '2'),
                12 => array('id' => '13', 'name' => 'Đồng hồ Orginal', 'parent_id' => '2'),
                13 => array('id' => '14', 'name' => 'Đồng hồ Fosill', 'parent_id' => '2'),
                14 => array('id' => '15', 'name' => 'Đồng hồ Maceur', 'parent_id' => '2'),
                15 => array('id' => '16', 'name' => 'Đồng hồ Seiko', 'parent_id' => '2'),
                16 => array('id' => '17', 'name' => 'Đồng hồ đôi Eros', 'parent_id' => '3'),
                17 => array('id' => '18', 'name' => 'Đông ht_description', 'parent_id' => '3'),
                18 => array('id' => '19', 'name' => 'Đồng hồ đôi Casio', 'parent_id' => '3'),
                19 => array('id' => '20', 'name' => 'Đồng hồ đôi Emoji', 'parent_id' => '3'),
                20 => array('id' => '21', 'name' => 'Đồng hồ Omega', 'parent_id' => '3'),
                21 => array('id' => '22', 'name' => 'Đồng hồ Kazien', 'parent_id' => '3'),
                22 => array('id' => '23', 'name' => 'Đồng hồ báo thức', 'parent_id' => '4'),
                23 => array('id' => '24', 'name' => 'Đồng hồ định vị', 'parent_id' => '4'),
                24 => array('id' => '25', 'name' => 'Đồng hồ định vị 1', 'parent_id' => '4'),
                25 => array('id' => '26', 'name' => 'Đồng hồ sức khỏe', 'parent_id' => '4'),
                26 => array('id' => '27', 'name' => 'Đồng hồ để bàn', 'parent_id' => '4'),
                27 => array('id' => '28', 'name' => 'Đồng hồ đồ chơi', 'parent_id' => '4'),
            );;
        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['name']);
            DB::table('categories')->insert($category);
        }
    }
}
