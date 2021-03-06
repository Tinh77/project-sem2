<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'owner_id' => 1,
                'buyer_id' => 2,
                'gift_id' => 2,
                'message' => 'Tôi cần món đồ mà bạn đang cho',
                'confirm_owner_flag' => false,
                'confirm_buyer_flag' => false,
                'status' => true
            ],
            [
                'owner_id' => 1,
                'buyer_id' => 2,
                'gift_id' => 3,
                'message' => 'Tôi cần món đồ mà bạn đang cho',
                'confirm_owner_flag' => false,
                'confirm_buyer_flag' => false,
                'status' => true
            ],
            [
                'owner_id' => 2,
                'buyer_id' => 2,
                'gift_id' => 10,
                'message' => 'Tôi cần món đồ mà bạn đang cho',
                'confirm_owner_flag' => false,
                'confirm_buyer_flag' => false,
                'status' => true
            ],
            [
                'owner_id' => 3,
                'buyer_id' => 1,
                'gift_id' => 1,
                'message' => 'Tôi cần món đồ mà bạn đang cho',
                'confirm_owner_flag' => false,
                'confirm_buyer_flag' => false,
                'status' => true
            ],
        ]);
    }
}
