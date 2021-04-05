<?php

use Illuminate\Database\Seeder;

class   MyCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers =
            array(
                0 => array('name' => 'Nguyễn Đình Giang', 'email' => 'giang9x@gmail.com', 'password' => Hash::make(123123)),
                1 => array('name' => 'Đặng Quang Hà', 'email' => 'ha2k@gmail@gmail.com', 'password' => Hash::make(123123)),
            );


            DB::table('customers')->insert($customers);
    }
}
