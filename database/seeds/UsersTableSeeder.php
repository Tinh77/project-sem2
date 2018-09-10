<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'account_id' => 1,
                'username' => 'ahihidongok',
                'password' => \Illuminate\Support\Facades\Hash::make('password')
            ],
            [
                'account_id' => 2,
                'username' => 'tinhgiang',
                'password' => \Illuminate\Support\Facades\Hash::make('12344321')
            ],
            [
                'account_id' => 3,
                'username' => 'nguyenvana',
                'password' => \Illuminate\Support\Facades\Hash::make('taolanguyenvana')
            ],
            [
                'account_id' => 4,
                'username' => 'xuanhung2401',
                'password' => \Illuminate\Support\Facades\Hash::make('1234567')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
