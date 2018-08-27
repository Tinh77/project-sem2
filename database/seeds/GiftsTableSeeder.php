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
                'phone_number'=>'0167492457',
                'address'=>'Đường Chương Dương gần Chợ Thủ Đức, từ ngã 4 Thử Đức quẹo xuống hướng chợ Thủ Đức khoảng 1,5Km, quẹo phải khoảng 400m, bên tay phải',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://kidsplaza-1.cdn.vccloud.vn/blog/wp-content/uploads/2017/03/quan-ao-tre-so-sinh-1.jpg',
                'age_range'=>1,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>2,
                'category_id'=>1,
                'name'=>'Áo',
                'phone_number'=>'0987901371',
                'address'=>'Sứ Buffet – 64 Nguyễn Du, quận Hai Bà Trưng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://media.bibomart.net/u/bbm/product/2016/01/27/17/47/1000_1000/ao-so-sinh-carter-mau-day-s9-102913-4_1.jpg',
                'age_range'=>1,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>3,
                'category_id'=>1,
                'name'=>'Áo',
                'phone_number'=>'0987902374',
                'address'=>'The Rooftop - Tầng 19 Tòa nhà Pacific, 83B Lý Thường Kiệt, quận Hoàn Kiếm',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://media.bibomart.net/u/bbm/product/2015/06/09/01/36/101632-a_1.jpg',
                'age_range'=>1,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>4,
                'category_id'=>1,
                'name'=>'Áo trắng',
                'phone_number'=>'0987654247',
                'address'=>'Ao Quán – 18 ngõ 19 Đông Tác, Đống Đa, Hà Nội',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://heocoishop.com/wp-content/uploads/2017/01/ASS-TRANG.jpg',
                'age_range'=>1,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>5,
                'category_id'=>'1',
                'name'=>'Quần dài',
                'phone_number'=>'01668910521',
                'address'=>' Công Viên Nhỏ - 36/76 An Dương, quận Tây Hồ',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://muachungcdn.com/thumb_w/550,99/i:product/128/3/i2bfy/combo-8-quan-dai-cotton-cho-be-so-sinh.jpg',
                'age_range'=>1,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>6,
                'category_id'=>1,
                'name'=>'Quần tất',
                'phone_number'=>'01668945275',
                'address'=>'Ngọc Mai Vàng – Tầng 17 Ruby Plaza, 44 Lê Ngọc Hân, quận Hai Bà Trưng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://shopbabyfun.com.vn/media/product/2441263_1_765_quan_lien_tat_2_5225.jpg',
                'age_range'=>2,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>7,
                'category_id'=>1,
                'name'=>'Quần đùi',
                'phone_number'=>'0987456789',
                'address'=>'Soft Water - Số 42 đường 9, tập thể F361 An Dương, quận Tây Hồ',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://vn-live-02.slatic.net/original/dcc5319607945e862661190be63a7adc.jpg',
                'age_range'=>2,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>8,
                'category_id'=>1,
                'name'=>'Quần',
                'phone_number'=>'01678999991',
                'address'=>' Á Gia – Số 36 Quang Trung, quận Hoàn Kiếm',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://cdn.concung.com/30337-37381-cat/set-3-quan-so-sinh-ngan-cf-nb-xanh-duong.jpg',
                'age_range'=>2,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>9,
                'category_id'=>2,
                'name'=>'Mũ',
                'phone_number'=>'0987901389',
                'address'=>'Buffet Việt – 1A Tăng Bạt Hổ, quận Hai Bà Trưng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://kidsplaza-1.cdn.vccloud.vn/media/wysiwyg/product/do-so-sinh/mu-so-sinh-kuku-ku2155-1.jpg',
                'age_range'=>2,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>10,
                'category_id'=>2,
                'name'=>'Mũ',
                'phone_number'=>'01668999777',
                'address'=>'Sứ Bia - 23 Nguyễn Đình Chiểu, quận Hai Bà Trưng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://eneoia.com/uploads/news/2016_03/07/98446057493227-72592.jpg',
                'age_range'=>3,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>11,
                'category_id'=>2,
                'name'=>'Mũ',
                'phone_number'=>'0987123789',
                'address'=>'RUM Quán - Ngõ 62 Trần Thái Tông, quận Cầu Giấy',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://moki.vn/images/images/Anhtintuc/anhtintuc-4/chon-mu-cho-tre-mua-he%202.jpg',
                'age_range'=>3,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>12,
                'category_id'=>2,
                'name'=>'Mũ Bibos',
                'phone_number'=>'01668925666',
                'address'=>'Số 184 Triệu Việt Vương, quận Hai Bà Trưng',
                'description'=>'cần cho một mũ',
                'images'=>'https://media.bibomart.net/u/bbm/product/2017/01/20/22/17/300_300/mu-ss-2-tai-bibos-trang-vien-hong-3m-113466_1.jpg',
                'age_range'=>3,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>13,
                'category_id'=>3,
                'name'=>'Giày con gấu',
                'phone_number'=>'0969296064',
                'address'=>' Phương Nguyên – 51 - 53 Tô Ngọc Vân, quận Tây Hồ',
                'description'=>'Đôi giày này cần chủ mới',
                'images'=>'https://afamilycdn.com/k:BbnKCSyXiBaccccccccccccFlVeI2z/Image/2014/04/baby-shoes-e5c89/mua-giay-dep-cho-con-va-nhung-dieu-me-can-luu-y.jpg',
                'age_range'=>3,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>14,
                'category_id'=>3,
                'name'=>'Giày hello kitty',
                'phone_number'=>'01217194177',
                'address'=>' 23B Điện Biên Phủ,Đà Nẵng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'http://media.doisongphapluat.com/514/2016/12/8/cach-chon-giay-dep-cho-be-4.jpg',
                'age_range'=>4,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>15,
                'category_id'=>3,
                'name'=>'Giày len xanh',
                'phone_number'=>'01689782726',
                'address'=>'202 Nguyễn Chí Thanh,Đà Nẵng ',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'http://2.bp.blogspot.com/-3MlFWJ2Bg3A/VelRrIivgII/AAAAAAAAAUI/VRuUd-a9JGg/s1600/g.jpg',
                'age_range'=>4,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>16,
                'category_id'=>3,
                'name'=>'Giày hoa',
                'phone_number'=>'01687777563',
                'address'=>'Bờ biển Bắc Mỹ An (KS Furama quản lý),Đà Nẵng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'http://phukienchobe.com/image.php?image=http://phukienchobe.com/templates/pictures/products/1439096903_1364352096_1209227958.jpg',
                'age_range'=>4,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>17,
                'category_id'=>4,
                'name'=>'Xe đẩy Fralin',
                'phone_number'=>'01668910520',
                'address'=>' Z15-16-17 Bạch Đằng Đông,Đà Nẵng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/x/e/xe-day-bf889b-8.jpg',
                'age_range'=>4,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>18,
                'category_id'=>4,
                'name'=>'Xe đẩy Gluck',
                'phone_number'=>'01692557771',
                'address'=>' 78 Trương Chí Cương ,Đà Nẵng',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://media.bibomart.net/u/bbm/product/2016/11/29/16/12/1000_1000/xe-day-2-chieu-gluck-c68-mau-do-1_1.jpg',
                'age_range'=>4,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>19,
                'category_id'=>4,
                'name'=>'Xe tập đi Zaracos',
                'phone_number'=>'01654789987',
                'address'=>' 52 Mạc Đĩnh Chi, Phường Đa Kao, Quận 1,TP Hồ Chí Minh',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://www.tuticare.com/media/product/18956_xe_t_p_i_cho_b_zaracos_zoe_666_blue_01.jpg',
                'age_range'=>1,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>20,
                'category_id'=>4,
                'name'=>'Bàn ăn',
                'phone_number'=>'01688456222',
                'address'=>' 19B Nguyễn Thị Diệu, Phường 6, Quận 3,TP Hồ Chí Minh',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'http://vn-live-01.slatic.net/p/4/ghe-an-bot-cho-be-royal-care-rc201-9671-2243412-29d88a276e11135b956c57db199793a2.jpg',
                'age_range'=>2,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>'21',
                'category_id'=>'5',
                'name'=>'Trống',
                'phone_number'=>'0978888999',
                'address'=>'Số 46 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân Phú,TP Hồ Chí Minh',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://s3-ap-southeast-1.amazonaws.com/chanhtuoi/uploads/2016/08/kinh-nghiem-mua-do-choi-cho-be-2.jpg',
                'age_range'=>1,
                'gender'=>'2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>22,
                'category_id'=>5,
                'name'=>'Đồ chơi kệ chữ a',
                'phone_number'=>'0978121279',
                'address'=>'6 Phan Văn Chương, Phú Mỹ Hưng, Phường Tân Phú, Quận 7,TP Hồ Chí Minh',
                'description'=>'Liên hệ nhanh với mình nha',
                'images'=>'http://www.chuyencungcap.com/data/upload/goodlink-do-choi-ke-chu-a-cho-be-mq2821.jpg',
                'age_range'=>3,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>23,
                'category_id'=>5,
                'name'=>'Kệ phát nhạc',
                'phone_number'=>'0987935554',
                'address'=>'28 Phạm Ngọc Thạch, Phường 6, Quận 3,TP Hồ Chí Minh',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'https://media.bibomart.net/u/bbm/product/2013/05/10/21/59/do-choi-phat-nhac-fisher-price-b0846.jpg',
                'age_range'=>4,
                'gender'=>2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id'=>24,
                'category_id'=>5,
                'name'=>'Thảm cho bé',
                'phone_number'=>'0987909909',
                'address'=>'33 Lê Quý Đôn, Phường 7, Quận 3,TP Hồ Chí Minh',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images'=>'http://familydeal.vn/Uploads/images/tham-bright-star-familydeal2.jpg',
                'age_range'=>2,
                'gender'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
