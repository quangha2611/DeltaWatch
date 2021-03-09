<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MyProviderSeeder extends Seeder
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

        DB::table('providers')->truncate();

        $providers = array(
        0 => array('id' => '1', 'prov_name' => 'Đồng Hồ Thông Minh Giá Rẻ', 'prov_address' => ' Tòa Nhà CT5A, KĐT Xa La, Quận Hà Đông, TP Hà Nội (TPHN)', 'prov_phone' => '0914 511 530', 'prov_email' => 'donghothongminh70@gmail.com', 'prov_represent' => 'Phạm Tú Anh'),
        1 => array('id' => '2', 'prov_name' => 'Công Ty TNHH Phân Phối Sản Phẩm Cao Cấp LPD', 'prov_address' => ' Số 41, Thi Sách, P. Ngô Thì Nhậm, Q. Hai Bà Trưng, TP Hà Nội (TPHN)', 'prov_phone' => '(024) 39766202', 'prov_email' => 'hamex@hn.vnn.vn', 'prov_represent' => 'Nguyễn Đình Giang'),
        2 => array('id' => '3', 'prov_name' => 'Công Ty TNHH Sao Hỏa', 'prov_address' => ' Số 11, Đường Số 10, Trần Não, P. Bình An, Quận 2, TP Hồ Chí Minh (TPHCM)', 'prov_phone' => '(028) 37407155 - 0903 731 769', 'prov_email' => 'info@mars-vn.com', 'prov_represent' => 'Đặng Quang Hà'),
        3 => array('id' => '4', 'prov_name' => 'Công Ty TNHH Thương Mại Dịch Vụ XNK Hưng Việt Phát', 'prov_address' => ' 262/4A Cách Mạng Tháng 8, Phường 10, Quận 3, TP. Hồ Chí Minh (TPHCM)', 'prov_phone' => '(028) 62587345, 0938.097.568', 'prov_email' => 'usbquatang@gmail.com', 'prov_represent' => 'Vũ Ngọc Hải'),
        4 => array('id' => '5', 'prov_name' => 'Công Ty TNHH MTV Thương Mại Dịch Vụ Quà Tặng Thiên Minh', 'prov_address' => ' 75/9 Nguyễn Tư Giản, Phường 12, Quận Gò Vấp, TP. Hồ Chí Minh (TPHCM)', 'prov_phone' => '(028) 36028858, 090 246 28 20', 'prov_email' => 'thienminhgifts@gmail.com', 'prov_represent' => 'Bùi Huy Hoàng'),
        5 => array('id' => '6', 'prov_name' => 'Công Ty TNHH MTV Thương Mại Dịch Vụ Phong Kim Anh', 'prov_address' => ' 13 Nguyễn Duy Dương, P. 8, Q. 5, Tp. Hồ Chí Minh (TPHCM)', 'prov_phone' => '(028) 39238427, 0903 976 887', 'prov_email' => 'info@phongkimanh.com', 'prov_represent' => 'Vũ Xuân Trọng'),
        6 => array('id' => '7', 'prov_name' => 'Công Ty CP XNK Hàng Hiệu Hoa Kỳ (HHHK JSC)', 'prov_address' => ' 331 Nguyễn Đình Chiểu, Phường 5, Quận 3, Tp. Hồ Chí Minh (TPHCM)', 'prov_phone' => '(028) 39293969, 39293993', 'prov_email' => 'contact@luxshopping.vn', 'prov_represent' => 'Nguyễn Xuân Quang'),
        7 => array('id' => '8', 'prov_name' => 'Công Ty Cổ Phần TYP Việt Nam', 'prov_address' => ' Số 4, Ngõ 105/47 Phố Vọng Hà, P. Chương Dương, Q. Hoàn Kiếm, TP. Hà Nội (TP.HN)', 'prov_phone' => '(024) 39991686', 'prov_email' => 'marketing@typvietnam.vn', 'prov_represent' => 'Phạm Sơn Việt'),
        8 => array('id' => '9', 'prov_name' => 'Công Ty TNHH Một Thành Viên XD TM SX Dịch Vụ Xuất Khẩu Phương Đức', 'prov_address' => ' 35 Xuân Hồng, P. 12, Q. Tân Bình Tp. Hồ Chí Minh (TPHCM)', 'prov_phone' => '(028) 38119134', 'prov_email' => 'donghoasia@yahoo.com', 'prov_represent' => 'Phùng Thị Hải Yến'),
        9 => array('id' => '10', 'prov_name' => 'Công Ty TNHH Thương Mại Dịch Vụ Quốc Tế Hưng Thịnh', 'prov_address' => ' 256 Nguyễn Thiện Thuật, Phường 03, Quận 3, TP Hồ Chí Minh (TPHCM)', 'prov_phone' => '0918 795 589', 'prov_email' => 'donghohunghtinh@yahoo.com.vn', 'prov_represent' => 'Nguyễn Thế Vinh'),
        10 => array('id' => '11', 'prov_name' => 'Công Ty TNHH Thời Gian Thành Phố', 'prov_address' => ' 68 Nguyễn Huệ, Phường Bến Nghé, Quận 1, Tp. Hồ Chí Minh (TPHCM)', 'prov_phone' => '0903 333 354', 'prov_email' => 'info@atenwatch.vn', 'prov_represent' => 'Nguyễn Việt Hoàng'),
        11 => array('id' => '12', 'prov_name' => 'Công Ty Cổ Phần ENSA', 'prov_address' => ' Số 2, Ngách 4/13, Ngõ 13, Đường Thanh Lãm, Phường Phú Lãm, Quận Hà Đông, Thành Phố Hà Nội', 'prov_phone' => '(024) 66556485', 'prov_email' => 'sales@ensa.vn', 'prov_represent' => 'Nguyễn Thế Chiến'),
        12 => array('id' => '13', 'prov_name' => 'Cửa Hàng KTWatch', 'prov_address' => ' 115/25 Tân Thới Nhất 1, P. Tân Thới Nhất, Q. 12, Tp. Hồ Chí Minh (TPHCM)', 'prov_phone' => '0974 068 739', 'prov_email' => 'ktwatch.vn@gmail.com', 'prov_represent' => 'Chu Công Đan Trường'),
        13 => array('id' => '14', 'prov_name' => 'Công Ty TNHH Thương Mại Lê Anh', 'prov_address' => ' 36 Phạm Ngọc Thạch, Q. Đống Đa, TP Hà Nội (TPHN)', 'prov_phone' => '0912 423 538', 'prov_email' => 'minhtu012000@gmail.com', 'prov_represent' => 'Dương Ngô Hùng'),
        14 => array('id' => '15', 'prov_name' => 'Công Ty TNHH Phát Triển & Thương Mại Duy Anh', 'prov_address' => ' 200A Phồ  Huế, Quận Hai Bà Trưng, Thành Phố Hà Nội (TPHN)', 'prov_phone' => '(024) 22148336', 'prov_email' => 'donghoduyanh@gmail.com', 'prov_represent' => 'Vũ Xuân Khánh'),
    );
        foreach ($providers as $provider) {
            DB::table('providers')->insert($provider);
        }
    }
}
