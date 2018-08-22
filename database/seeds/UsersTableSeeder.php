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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'account_id' => 1,
                'username' => 'ahihidongok',
                'password' => \Illuminate\Support\Facades\Hash::make('password')
            ],
            [
                'account_id' => 2,
                'username' => 'quanganh9x',
                'password' => \Illuminate\Support\Facades\Hash::make('password')
            ],
            [
                'account_id' => 3,
                'username' => 'nguyenvana',
                'password' => \Illuminate\Support\Facades\Hash::make('taolanguyenvana')
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
