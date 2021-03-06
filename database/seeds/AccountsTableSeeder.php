<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('accounts')->truncate();
        DB::table('accounts')->insert([
            [
                'first_name' => 'ahihi',
                'last_name' => 'dongok',
                'email' => 'tinhgtd00580@fpt.edu.vn',
                'phone' => '699669996',
                'address' => 'saturn',
                'age' => 1,
                'gender' => true,
                'credits' => 9999,
                'intro' => 'T k biết t ở đâu ra ?'
            ],
            [
                'first_name' => 'Giang',
                'last_name' => 'Tình',
                'email' => 'giangthitinh.070799@gmail.com',
                'phone' => '01217194177',
                'address' => 'moon',
                'age' => 99,
                'gender' => true,
                'credits' => 999,
                'intro' => 'T cũng k biết t ở đâu ra ?'
            ],
            [
                'first_name' => 'nguyen',
                'last_name' => 'a',
                'email' => 'anguyenvan@sth.com',
                'phone' => '699669999',
                'address' => 'sun',
                'age' => 50,
                'gender' => false,
                'credits' => 9696,
                'intro' => 'T càng k biết t ở đâu ra ?'
            ],
            [
                'first_name' => 'Đào',
                'last_name' => 'Hùng',
                'email' => 'xuanhung2401@gmail.com',
                'phone' => '0966668388',
                'address' => 'Bà Triệu',
                'age' => 40,
                'gender' => true,
                'credits' => 0,
                'intro' => 'T Quang Anh dở hơi.'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
