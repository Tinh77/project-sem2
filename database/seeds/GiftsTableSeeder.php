<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class GiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('gifts')->truncate();
        DB::table('gifts')->insert([
            [
                'account_id'=>1,
                'category_id'=>1,
                'name'=>'Áo dài tay',
                'description'=>'',
                'images'=>'https://kidsplaza-1.cdn.vccloud.vn/blog/wp-content/uploads/2017/03/quan-ao-tre-so-sinh-1.jpg',
                'age_range'=>1,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>2,
                'category_id'=>1,
                'name'=>'Áo',
                'description'=>'Mình có 4 áo dài tay ,ai có nhu cầu liên lạc với mình',
                'images'=>'https://media.bibomart.net/u/bbm/product/2016/01/27/17/47/1000_1000/ao-so-sinh-carter-mau-day-s9-102913-4_1.jpg',
                'age_range'=>1,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>3,
                'category_id'=>1,
                'name'=>'Áo',
                'description'=>'Áo vẫn còn mới chưa sử dụng lần nào',
                'images'=>'https://media.bibomart.net/u/bbm/product/2015/06/09/01/36/101632-a_1.jpg',
                'age_range'=>1,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>4,
                'category_id'=>1,
                'name'=>'Áo trắng',
                'description'=>'4 Áo màu trắng ngộ nghĩnh',
                'images'=>'https://heocoishop.com/wp-content/uploads/2017/01/ASS-TRANG.jpg',
                'age_range'=>1,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>5,
                'category_id'=>'1',
                'name'=>'Quần dài',
                'description'=>'mình còn 5 quần dài cho bé',
                'images'=>'https://muachungcdn.com/thumb_w/550,99/i:product/128/3/i2bfy/combo-8-quan-dai-cotton-cho-be-so-sinh.jpg',
                'age_range'=>1,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>6,
                'category_id'=>1,
                'name'=>'Quần tất',
                'description'=>'mình có 4 cái',
                'images'=>'https://shopbabyfun.com.vn/media/product/2441263_1_765_quan_lien_tat_2_5225.jpg',
                'age_range'=>2,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>7,
                'category_id'=>1,
                'name'=>'Quần đùi',
                'description'=>'Có 5 quần trắng',
                'images'=>'https://vn-live-02.slatic.net/original/dcc5319607945e862661190be63a7adc.jpg',
                'age_range'=>2,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>8,
                'category_id'=>1,
                'name'=>'Quần',
                'description'=>'Quần đùi cho bạn nhỏ mặc mùa hè',
                'images'=>'https://cdn.concung.com/30337-37381-cat/set-3-quan-so-sinh-ngan-cf-nb-xanh-duong.jpg',
                'age_range'=>2,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>9,
                'category_id'=>2,
                'name'=>'Mũ',
                'description'=>'2 mũ đáng yêu màu hồng và xanh',
                'images'=>'https://kidsplaza-1.cdn.vccloud.vn/media/wysiwyg/product/do-so-sinh/mu-so-sinh-kuku-ku2155-1.jpg',
                'age_range'=>2,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>10,
                'category_id'=>2,
                'name'=>'Mũ',
                'description'=>'Mũ con gấu màu xanh cho bé nào cần',
                'images'=>'https://eneoia.com/uploads/news/2016_03/07/98446057493227-72592.jpg',
                'age_range'=>3,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>11,
                'category_id'=>2,
                'name'=>'Mũ',
                'description'=>'Còn 3 mũ cần cho , ai cần liên hệ mình',
                'images'=>'https://moki.vn/images/images/Anhtintuc/anhtintuc-4/chon-mu-cho-tre-mua-he%202.jpg',
                'age_range'=>3,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>12,
                'category_id'=>2,
                'name'=>'Mũ Bibos',
                'description'=>'cần cho một mũ',
                'images'=>'https://media.bibomart.net/u/bbm/product/2017/01/20/22/17/300_300/mu-ss-2-tai-bibos-trang-vien-hong-3m-113466_1.jpg',
                'age_range'=>3,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>13,
                'category_id'=>3,
                'name'=>'Giày con gấu',
                'description'=>'Đôi giày này cần chủ mới',
                'images'=>'https://afamilycdn.com/k:BbnKCSyXiBaccccccccccccFlVeI2z/Image/2014/04/baby-shoes-e5c89/mua-giay-dep-cho-con-va-nhung-dieu-me-can-luu-y.jpg',
                'age_range'=>3,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>14,
                'category_id'=>3,
                'name'=>'Giày hello kitty',
                'description'=>' Giày cho bé gái',
                'images'=>'http://media.doisongphapluat.com/514/2016/12/8/cach-chon-giay-dep-cho-be-4.jpg',
                'age_range'=>4,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>15,
                'category_id'=>3,
                'name'=>'Giày len xanh',
                'description'=>'Cần một chủ mới',
                'images'=>'http://2.bp.blogspot.com/-3MlFWJ2Bg3A/VelRrIivgII/AAAAAAAAAUI/VRuUd-a9JGg/s1600/g.jpg',
                'age_range'=>4,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>16,
                'category_id'=>3,
                'name'=>'Giày hoa',
                'description'=>'Cho bé gái nha',
                'images'=>'http://phukienchobe.com/image.php?image=http://phukienchobe.com/templates/pictures/products/1439096903_1364352096_1209227958.jpg',
                'age_range'=>4,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>17,
                'category_id'=>4,
                'name'=>'Xe đẩy Fralin',
                'description'=>'Chờ ai có nhu cầu liên hệ mình',
                'images'=>'https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/x/e/xe-day-bf889b-8.jpg',
                'age_range'=>4,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>18,
                'category_id'=>4,
                'name'=>'Xe đẩy Gluck',
                'description'=>'liên hệ mình nha',
                'images'=>'https://media.bibomart.net/u/bbm/product/2016/11/29/16/12/1000_1000/xe-day-2-chieu-gluck-c68-mau-do-1_1.jpg',
                'age_range'=>4,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>19,
                'category_id'=>4,
                'name'=>'Xe tập đi Zaracos',
                'description'=>'vẫn còn mới',
                'images'=>'https://www.tuticare.com/media/product/18956_xe_t_p_i_cho_b_zaracos_zoe_666_blue_01.jpg',
                'age_range'=>1,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>20,
                'category_id'=>4,
                'name'=>'Bàn ăn',
                'description'=>'liên hệ mình nha',
                'images'=>'http://vn-live-01.slatic.net/p/4/ghe-an-bot-cho-be-royal-care-rc201-9671-2243412-29d88a276e11135b956c57db199793a2.jpg',
                'age_range'=>2,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>'21',
                'category_id'=>'5',
                'name'=>'Trống',
                'description'=>'Mình còn 3 cái',
                'images'=>'https://s3-ap-southeast-1.amazonaws.com/chanhtuoi/uploads/2016/08/kinh-nghiem-mua-do-choi-cho-be-2.jpg',
                'age_range'=>1,
                'gender'=>'2',
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>22,
                'category_id'=>5,
                'name'=>'Đồ chơi kệ chữ a',
                'description'=>'Liên hệ nhanh với mình nha',
                'images'=>'http://www.chuyencungcap.com/data/upload/goodlink-do-choi-ke-chu-a-cho-be-mq2821.jpg',
                'age_range'=>3,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>23,
                'category_id'=>5,
                'name'=>'Kệ phát nhạc',
                'description'=>'Vì nhà không còn chỗ để nên liên hệ nhanh với mình',
                'images'=>'https://media.bibomart.net/u/bbm/product/2013/05/10/21/59/do-choi-phat-nhac-fisher-price-b0846.jpg',
                'age_range'=>4,
                'gender'=>2,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>24,
                'category_id'=>5,
                'name'=>'Thảm cho bé',
                'description'=>'Hơi cũ nha',
                'images'=>'http://familydeal.vn/Uploads/images/tham-bright-star-familydeal2.jpg',
                'age_range'=>2,
                'gender'=>1,
                'city'=>0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
