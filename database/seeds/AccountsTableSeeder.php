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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('accounts')->truncate();
        DB::table('accounts')->insert([
            [
                'first_name' => 'ahihi',
                'last_name' => 'dongok',
                'email' => 'ahihi.dongok@sth.com',
                'phone' => '699669996',
                'address' => 'saturn',
                'age' => 1,
                'gender' => true,
                'intro' => 'T k biết t ở đâu ra ?'
            ],
            [
                'first_name' => 'unk',
                'last_name' => 'nown',
                'email' => 'unknown@sth.com',
                'phone' => '66775508',
                'address' => 'moon',
                'age' => 99,
                'gender' => true,
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
                'intro' => 'T càng k biết t ở đâu ra ?'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
