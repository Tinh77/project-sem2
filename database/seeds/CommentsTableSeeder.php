<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'account_id' => 1,
                'gift_id' => 1,
                'rating' => 5,
                'message' => 'Sau khi mặc áo tôi biến thành siêu nhân! Yêu shop'
            ],
            [
                'account_id' => 1,
                'gift_id' => 23,
                'rating' => 5,
                'message' => 'Sau khi nhét cái * này vào * bạn ấy, rất sướng. Cảm ơn shop đã mang lại trải nghiệm * tuyệt vời'
            ],
            [
                'account_id' => 1,
                'gift_id' => 24,
                'rating' => 1,
                'message' => 'Đồ chơi khiến * bị rách *. Không khuyến cáo chơi mà không có người lớn'
            ],
            [
                'account_id' => 2,
                'gift_id' => 23,
                'rating' => 5,
                'message' => 'Tuyệt vời! * tôi đã được thổi 1 luồng gió mới lạ'
            ],
            [
                'account_id' => 3,
                'gift_id' => 6,
                'rating' => 3,
                'message' => 'Bảo Anh ơi xong chưa ? -> Không có gì để mặc hết!'
            ],
            [
                'account_id' => 2,
                'gift_id' => 8,
                'rating' => 5,
                'message' => 'Tôi đã lên * khi * tôi mặc cái này. Superb!'
            ],
            [
                'account_id' => 3,
                'gift_id' => 16,
                'rating' => 2,
                'message' => 'Không có sự *** nào hết. Chất lượng khá. Hàng việt nam chất lượng không cao'
            ],
            [
                'account_id' => 1,
                'gift_id' => 17,
                'rating' => 4,
                'message' => 'Cá không ăn muối cá khôn. Con cãi cha mẹ trăm đường con ngu'
            ]
        ]);
    }
}
