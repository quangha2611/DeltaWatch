<?php

use Carbon\Carbon;
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
                0 => array('author_id' => '1', 'category_id' => '1', 'title' => 'Đồng hồ thông minh Apple Watch mới ra mắt', 'seo_title' => '', 'excerpt' => 'TTO - Apple từng công bố sẽ đưa các tính năng về tim mạch vào Apple Watch trong tháng 9, nhưng mới đây mới chính thức được áp dụng. Theo đó, đồn...', 'body' => '', 'image' => 'posts/March2021/post1.jpg', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => '0'),
                1 => array('author_id' => '1', 'category_id' => '3', 'title' => 'Đồng hồ Apple Watch chính hãng bán ra tại VN', 'seo_title' => '', 'excerpt' => 'Bạn cũng sẽ kết nối với bác sĩ của mình một cách liên tục và được đánh giá tình trạng sức khỏe một cách thường xuyên hơn. Một trong những thiết ...', 'body' => '', 'image' => 'posts/March2021/post2.jpg', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => '0'),
                2 => array('author_id' => '1', 'category_id' => '5', 'title' => 'Thị trường smartwatch: khi Fitbit và Google động thủ', 'seo_title' => '', 'excerpt' => 'Apple Watch Series 5 vừa mới được ra mắt có nhiều tính năng sức khỏe mới, trong đó bao gồm cả một App Store dành riêng cho thiết bị này. Apple W...', 'body' => '', 'image' => 'posts/March2021/post3.jpg', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => '0'),
                3 => array('author_id' => '1', 'category_id' => '2', 'title' => 'Đồng hồ thông minh nào nâng cấp Android Wear 2.0', 'seo_title' => '', 'excerpt' => 'TTO - Apple từng công bố sẽ đưa các tính năng về tim mạch vào Apple Watch trong tháng 9, nhưng mới đây mới chính thức được áp dụng. Theo đó, đồn...', 'body' => '', 'image' => 'posts/March2021/post4.jpg', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => '0'),
                4 => array('author_id' => '1', 'category_id' => '1', 'title' => 'Đức cấm đồng hồ thông minh cho trẻ em', 'seo_title' => '', 'excerpt' => 'Apple Watch Series 5 vừa mới được ra mắt có nhiều tính năng sức khỏe mới, trong đó bao gồm cả một App Store dành riêng cho thiết bị này. Apple W...', 'body' => '', 'image' => 'posts/March2021/post5.jpg', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => '0'),
                5 => array('author_id' => '1', 'category_id' => '4', 'title' => 'Thiết bị đeo tay thông minh cảnh báo tiểu đường đúng tới 85%', 'seo_title' => '', 'excerpt' => 'Bạn cũng sẽ kết nối với bác sĩ của mình một cách liên tục và được đánh giá tình trạng sức khỏe một cách thường xuyên hơn. Một trong những thiết ...', 'body' => '', 'image' => 'posts/March2021/post6.jpg', 'slug' => '', 'meta_description' => '', 'meta_keywords' => '', 'status' => 'PUBLISHED', 'featured' => '0'),
            );
        foreach ($posts as $post) {
            $post['slug'] = Str::slug($post['title'], '-');
            $post['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
            $post['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');

            DB::table('posts')->insert($post);
        }
    }
}
