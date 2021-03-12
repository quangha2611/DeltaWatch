<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MyProductSeeder extends Seeder
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


        $products =
            array(
                0 => array('id' => '1', 'po_name' => 'Samsung Gear Fit', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 1, 'po_gender' => 1, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '20', 'po_brand' => 5, 'po_category' => 'Đồng hồ nam', 'po_provider' => 1, 'po_price' => 1000000),
                1 => array('id' => '2', 'po_name' => 'Gear Pro Series 5', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 2, 'po_gender' => 0, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '30', 'po_brand' => 3, 'po_category' => 'Đồng hồ đôi Emoji', 'po_provider' => 4, 'po_price' => 2000000),
                2 => array('id' => '3', 'po_name' => 'Fitbit Verrsa Pro', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 3, 'po_gender' => 1, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '33', 'po_brand' => 2, 'po_category' => 'Đồng hồ sức khỏe', 'po_provider' => 14, 'po_price' => 300000),
                3 => array('id' => '4', 'po_name' => 'Samsung Gear Pro', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 4, 'po_gender' => 0, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '10', 'po_brand' => 5, 'po_category' => 'Đồng hồ Seiko', 'po_provider' => 11, 'po_price' => 42323333),
                4 => array('id' => '5', 'po_name' => 'Huawei Watch Fit', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 5, 'po_gender' => 1, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '15', 'po_brand' => 4, 'po_category' => 'Đồng hồ Philips', 'po_provider' => 15, 'po_price' => 354543),
                5 => array('id' => '6', 'po_name' => 'Huawei Watch Pro', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 6, 'po_gender' => 0, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '6', 'po_brand' => 4, 'po_category' => 'Đồng hồ Seiko', 'po_provider' => 9, 'po_price' => 654344),
                6 => array('id' => '7', 'po_name' => 'Huawei Watch GT2', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 7, 'po_gender' => 1, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '44', 'po_brand' => 4, 'po_category' => 'Đồng hồ nam', 'po_provider' => 7, 'po_price' => 12312),
                7 => array('id' => '8', 'po_name' => 'Amazfit Gts nội địa', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 8, 'po_gender' => 1, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '100', 'po_brand' => 2, 'po_category' => 'Đồng hồ đôi Emoji', 'po_provider' => 5, 'po_price' => 42344),
                8 => array('id' => '9', 'po_name' => 'Amazfit Gts quốc tế', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 9, 'po_gender' => 0, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '20', 'po_brand' => 2, 'po_category' => 'Đồng hồ Omega', 'po_provider' => 4, 'po_price' => 54345),
                9 => array('id' => '10', 'po_name' => 'Xiaomi Amazfit Gts Vàng', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 10, 'po_gender' => 1, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '24', 'po_brand' => 6, 'po_category' => 'Đồng hồ sức khỏe', 'po_provider' => 2, 'po_price' => 23432),
                10 => array('id' => '11', 'po_name' => 'Huami Amazfit Gts', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 11, 'po_gender' => 0, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '15', 'po_brand' => 3, 'po_category' => 'Đồng hồ Omega', 'po_provider' => 1, 'po_price' => 12323),
                11 => array('id' => '12', 'po_name' => 'Xiaomi Amazfit Pink', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 12, 'po_gender' => 1, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '76', 'po_brand' => 6, 'po_category' => 'Đồng hồ định vị', 'po_provider' => 15, 'po_price' => 543534),
                12 => array('id' => '13', 'po_name' => 'Xiaomi Amazfit gold', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 13, 'po_gender' => 1, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '45', 'po_brand' => 6, 'po_category' => 'Đồng hồ định vị', 'po_provider' => 3, 'po_price' => 32135),
                13 => array('id' => '14', 'po_name' => 'Xiaomi Amazfit Gts đen', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 14, 'po_gender' => 1, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '67', 'po_brand' => 6, 'po_category' => 'Đồng hồ Epos swiss', 'po_provider' => 8, 'po_price' => 312312),
                14 => array('id' => '15', 'po_name' => 'Xiaomi Amazfit GTS', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 15, 'po_gender' => 0, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '43', 'po_brand' => 6, 'po_category' => 'Đông hồ Daniel wellington', 'po_provider' => 11, 'po_price' => 312434),
                15 => array('id' => '16', 'po_name' => 'Apple Watch Series3', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 16, 'po_gender' => 1, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '12', 'po_brand' => 1, 'po_category' => 'Đông hồ Daniel wellington', 'po_provider' => 6, 'po_price' => 54353),
                16 => array('id' => '17', 'po_name' => 'Apple Watch Series4', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 17, 'po_gender' => 0, 'po_hot' => 0, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '42', 'po_brand' => 1, 'po_category' => 'Đồng hồ Citizen', 'po_provider' => 12, 'po_price' => 534543),
                17 => array('id' => '18', 'po_name' => 'Apple Watch Series5 nhôm', 'po_description' => 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'po_image' => 18, 'po_gender' => 1, 'po_hot' => 1, 'po_info' => '', 'po_policy' => '', 'po_quantity' => '46', 'po_brand' => 1, 'po_category' => 'Đồng hồ Epos swiss', 'po_provider' => 14, 'po_price' => 534534),
            );
        foreach ($products as $product) {
            $product['created_at'] = now();
            $product['updated_at'] = now();
            DB::table('products')->insert($product);
        }
    }
}
