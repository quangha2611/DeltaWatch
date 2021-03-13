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
                0 => array('id' => '1', 'author_id' => '1', 'category_id' => '1', 'title' => 'Đồng hồ thông minh Apple Watch mới ra mắt', 'seo_title' => '', 'excerpt' => 'TTO - Apple từng công bố sẽ đưa các tính năng về tim mạch vào Apple Watch trong tháng 9, nhưng mới đây mới chính thức được áp dụng. Theo đó, đồn...', 'body' => '', 'image' => '', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => '1'),
                1 => array('id' => '2', 'author_id' => '3', 'category_id' => '3', 'title' => 'Đồng hồ Apple Watch chính hãng bán ra tại VN', 'seo_title' => '', 'excerpt' => 'Bạn cũng sẽ kết nối với bác sĩ của mình một cách liên tục và được đánh giá tình trạng sức khỏe một cách thường xuyên hơn. Một trong những thiết ...', 'body' => '', 'image' => '', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => '1'),
                2 => array('id' => '3', 'author_id' => '1', 'category_id' => '5', 'title' => 'Thị trường smartwatch: khi Fitbit và Google động thủ', 'seo_title' => '', 'excerpt' => 'Apple Watch Series 5 vừa mới được ra mắt có nhiều tính năng sức khỏe mới, trong đó bao gồm cả một App Store dành riêng cho thiết bị này. Apple W...', 'body' => '', 'image' => '', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => '1'),
                3 => array('id' => '4', 'author_id' => '3', 'category_id' => '2', 'title' => 'Đồng hồ thông minh nào nâng cấp Android Wear 2.0', 'seo_title' => '', 'excerpt' => 'TTO - Apple từng công bố sẽ đưa các tính năng về tim mạch vào Apple Watch trong tháng 9, nhưng mới đây mới chính thức được áp dụng. Theo đó, đồn...', 'body' => '', 'image' => '', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => '1'),
                4 => array('id' => '5', 'author_id' => '4', 'category_id' => '1', 'title' => 'Đức cấm đồng hồ thông minh cho trẻ em', 'seo_title' => '', 'excerpt' => 'Apple Watch Series 5 vừa mới được ra mắt có nhiều tính năng sức khỏe mới, trong đó bao gồm cả một App Store dành riêng cho thiết bị này. Apple W...', 'body' => '', 'image' => '', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => '1'),
                5 => array('id' => '6', 'author_id' => '5', 'category_id' => '4', 'title' => 'Thiết bị đeo tay thông minh cảnh báo tiểu đường đúng tới 85%', 'seo_title' => '', 'excerpt' => 'Bạn cũng sẽ kết nối với bác sĩ của mình một cách liên tục và được đánh giá tình trạng sức khỏe một cách thường xuyên hơn. Một trong những thiết ...', 'body' => '', 'image' => '', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => '1'),
            );
        foreach ($posts as $post) {
            $post['slug'] = Str::slug($post['title'], '-');
            DB::table('posts')->insert($post);
        }
    }
}
