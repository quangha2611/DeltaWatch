<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MyPostSeeder extends Seeder
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

        $posts =
            array(
                0 => array('id' => '1', 'author_id' => '1', 'category_id' => '1', 'title' => 'Đồng hồ thông minh Apple Watch mới ra mắt', 'seo_title' => '', 'excerpt' => '', 'body' => '', 'image' => 1, 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => 1),
                1 => array('id' => '2', 'author_id' => '1', 'category_id' => '3', 'title' => 'Đồng hồ Apple Watch chính hãng bán ra tại VN', 'seo_title' => '', 'excerpt' => '', 'body' => '', 'image' => 2, 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => 1),
                2 => array('id' => '3', 'author_id' => '1', 'category_id' => '5', 'title' => 'Thị trường smartwatch: khi Fitbit và Google động thủ', 'seo_title' => '', 'excerpt' => '', 'body' => '', 'image' => 3, 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => 1),
                3 => array('id' => '4', 'author_id' => '1', 'category_id' => '2', 'title' => 'Đồng hồ thông minh nào nâng cấp Android Wear 2.0', 'seo_title' => '', 'excerpt' => '', 'body' => '', 'image' => 4, 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => 1),
                4 => array('id' => '5', 'author_id' => '1', 'category_id' => '1', 'title' => 'Đức cấm đồng hồ thông minh cho trẻ em', 'seo_title' => '', 'excerpt' => '', 'body' => '', 'image' => 5, 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => 1),
                5 => array('id' => '6', 'author_id' => '1', 'category_id' => '4', 'title' => 'Thiết bị đeo tay thông minh cảnh báo tiểu đường đúng tới 85%', 'seo_title' => '', 'excerpt' => '', 'body' => '', 'image' => 6, 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => 1),
            );
        foreach ($posts as $post) {
            $post['slug'] = Str::slug($post['title'], '-');
            DB::table('posts')->insert($post);
        }
    }
}
