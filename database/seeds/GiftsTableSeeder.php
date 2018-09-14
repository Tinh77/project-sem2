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
                'account_id' => 1,
                'category_id' => 1,
                'name' => 'Bộ áo dài tay Beiner',
                'description' => 'Mình có 5 bộ quần áo dài của con mình , mới mặc qua 2 mùa đông nhưng giờ mặc bị chật nên mình muốn để lại cho các bé khác',
                'images' => 'https://kidsplaza-1.cdn.vccloud.vn/blog/wp-content/uploads/2017/03/quan-ao-tre-so-sinh-1.jpg',
                'age_range' => 1,
                'gender' => 1,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 2,
                'category_id' => 1,
                'name' => 'Áo cài vai dài tay',
                'description' => 'Mình có 5 cái áo dài của con gái , mới mặc qua 1 mùa đông nhưng giờ mặc bị chật nên mình muốn để lại cho các bé nào mặc vừa',
                'images' => 'https://media.bibomart.net/u/bbm/product/2016/01/27/17/47/1000_1000/ao-so-sinh-carter-mau-day-s9-102913-4_1.jpg',
                'age_range' => 1,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 3,
                'category_id' => 1,
                'name' => 'Áo phông bé trai',
                'description' => 'Mình có 10 cái áo cộc của con mình , mặc được vài lần nhưng giờ mặc bị chật nên mình muốn để lại cho các bé nào mặc vừa',
                'images' => 'https://media.bibomart.net/u/bbm/product/2015/06/09/01/36/101632-a_1.jpg',
                'age_range' => 1,
                'gender' => 1,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 4,
                'category_id' => 1,
                'name' => 'Áo trắng',
                'description' => 'Mình có một lô áo cộc của trẻ từ 6-12 tháng không bị sờn rách sạch sẽ muốn để lại cho các bé từ 12 tháng trở xuống',
                'images' => 'https://media.bibomart.net/u/bbm/product/2013/05/10/15/27/300_300/ao-lullaby-cai-giua-trang-6m-040247-3.jpg',
                'age_range' => 1,
                'gender' => 2,
                'city' => 0,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 5,
                'category_id' => 2,
                'name' => 'Quần dài cá voi xanh',
                'description' => 'Mình có 15 chiếc quần của trẻ từ trên 12 tháng không bị sờn rách sạch sẽ muốn để lại cho các bé mặc vừa',
                'images' => 'https://muachungcdn.com/thumb_w/550,99/i:product/128/3/i2bfy/combo-8-quan-dai-cotton-cho-be-so-sinh.jpg',
                'age_range' => 1,
                'gender' => 1,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 6,
                'category_id' => 2,
                'name' => 'Quần nỉ sơ sinh cho bé',
                'description' => 'Mình có 1 lô quần nỉ của trẻ sơ sinh không bị sờn rách sạch sẽ muốn để lại cho các bé sơ sinh',
                'images' => 'https://shopbabyfun.com.vn/media/product/2441263_1_765_quan_lien_tat_2_5225.jpg',
                'age_range' => 2,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 7,
                'category_id' => 2,
                'name' => 'Quần đùi sơ sinh bo ống',
                'description' => 'Mình có 1 lô quần của trẻ sơ sinh không bị sờn rách sạch sẽ muốn để lại cho các bé sơ sinh',
                'images' => 'https://vn-live-02.slatic.net/original/dcc5319607945e862661190be63a7adc.jpg',
                'age_range' => 2,
                'gender' => 1,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 8,
                'category_id' => 2,
                'name' => 'Quần dài kaki',
                'description' => 'Mình có 2 cái quần màu kaki bé trai màu xanh và cam cho trẻ trên 3 tuổi muốn để lại cho bé nào mặc vừa quần không bị sờn rách và sạch sẽ',
                'images' => 'https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/cache/1/small_image/200x/9df78eab33525d08d6e5fb8d27136e95/i/m/img_1857.jpg',
                'age_range' => 2,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 9,
                'category_id' => 3,
                'name' => 'Mũ sơ sinh',
                'description' => 'Mình có 5 chiếc mũ của trẻ sơ sinh không bị sờn rách sạch sẽ muốn để lại cho các bé sơ sinh',
                'images' => 'https://kidsplaza-1.cdn.vccloud.vn/media/wysiwyg/product/do-so-sinh/mu-so-sinh-kuku-ku2155-1.jpg',
                'age_range' => 2,
                'gender' => 1,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 10,
                'category_id' => 3,
                'name' => 'Mũ phớt chấm bi',
                'description' => 'Mình được người thân tặng mũ mà con mình không đội vừa nên muốn để lại cho các bé',
                'images' => 'https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/cache/1/small_image/200x/9df78eab33525d08d6e5fb8d27136e95/m/u/mu-phot-cham-bi-4273-1.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 11,
                'category_id' => 3,
                'name' => 'Mũ',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'images' => 'https://moki.vn/images/images/Anhtintuc/anhtintuc-4/chon-mu-cho-tre-mua-he%202.jpg',
                'age_range' => 3,
                'gender' => 1,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 12,
                'category_id' => 3,
                'name' => 'Mũ Bibos',
                'description' => 'Mình được người thân tặng mũ mà con mình không đội vừa nên muốn để lại cho các bé',
                'images' => 'https://media.bibomart.net/u/bbm/product/2017/01/20/22/17/300_300/mu-ss-2-tai-bibos-trang-vien-hong-3m-113466_1.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 13,
                'category_id' => 3,
                'name' => 'Mũ Bibos',
                'description' => 'Mình được người thân tặng mũ mà con mình không đội vừa nên muốn để lại cho các bé',
                'images' => 'https://media.bibomart.net/u/bbm/product/2017/01/20/22/17/300_300/mu-ss-2-tai-bibos-trang-vien-hong-3m-113466_1.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 14,
                'category_id' => 4,
                'name' => 'Bitit hồng',
                'description' => 'Bé nhà mình chân lớn giày mới mua bé k đi vừa tặng lại cho bé nào cần nha',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwftfJ_WJPDGqAkfuVUYTcTsgtHV3qPHURMJOEtfCv-9s8b6fz',
                'age_range' => 4,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 15,
                'category_id' => 4,
                'name' => 'Giày đỏ chấm bi',
                'description' => 'Mình được người thân tặng giày cho bé nhà mình nhưng bé không đi vừa nên muốn tặng lại cho bé nào cần',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4y91B_0R5lx4c_EsRuYvJWekVh0NwyNx1MzmDL-HWZYtayKD7',
                'age_range' => 2,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 16,
                'category_id' => 4,
                'name' => 'Giày nhung',
                'description' => 'Bé nhà mình chóng lớn quá nên giày mới mua không đi vừa nữa, bạn nào quan tâm liên hệ mình tặng lại nha',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAGQRk9x24f2P5aOSAgzXG3fC-mC9Wia2Ogydr5UUOtYvFI8hHrw',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 17,
                'category_id' => 4,
                'name' => 'Giày thể thao đen',
                'description' => 'Mình được người thân tặng cho bé nhà mình nhưng bé đi không vừa',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD-W5wl3shniZBjplsKo1x1craqwUwmQqhN0OiEHPo5QMacxQM',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 18,
                'category_id' => 4,
                'name' => 'Giày len',
                'description' => 'Giày mình tự đan muốn tặng cho bé nào cần',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrHR7dXsuLFKEfX6Lv-2v5SKUaHYT-dIwlYqgnpzE2drI4UYbLuA',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 19,
                'category_id' => 4,
                'name' => 'Giày thể thao xanh',
                'description' => 'Bé nhà mình nhiều giày không đi hết nên muốn tặng lại cho bé nào cần',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBPFj5jV_kK4hBYBWvkGV-7xuAWFqLg_LrQ9BxWnwV8IwpDDXQ',
                'age_range' => 4,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 20,
                'category_id' => 4,
                'name' => 'Giày thể thao',
                'description' => 'Giày thể thao cho bé thoải mái và tự tin trên sân bóng',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxclbTawAjFjJyV6wA6Qb36kdFZeM9qp13l7dnJIilPQSlis2AQw',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 21,
                'category_id' => 5,
                'name' => 'Đồ chơi phát triển trí não',
                'description' => 'Bé nhà mình giờ đã lớn lên không còn chơi nữa nên muốn tặng lại cho bé khác',
                'images' => 'http://www.bongkids.com/data/Product/xe-oto-tha-hinh_1421031547.jpg',
                'age_range' => 2,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 22,
                'category_id' => 6,
                'name' => 'Bộ cốc thủy tinh in hình logo',
                'description' => 'Bộ đồ chơi giúp bé phát triển trí não',
                'images' => 'http://voviz.net/wp-content/uploads/2017/03/do-choi-go-gcb-dap-coc-vui-nhon-db081-30112016100432.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 23,
                'category_id' => 5,
                'name' => 'Búp bê Tomy',
                'description' => 'Đồ chơi còn mới lắm nha',
                'images' => 'http://sw001.hstatic.net/6/090639cccd7b1e/bup-be-tomy-licca-ld-09-cute-ballerina-fashion-doll_large.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 24,
                'category_id' => 5,
                'name' => 'Bộ đồ hàng cho bé',
                'description' => 'Bộ đồ hàng còn mới lắm nha',
                'images' => 'http://chosaigon24h.vn/upload/images/trum-ban-do-choi-bup-be-nau-an-tre-em-gia-re-hcm3.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 25,
                'category_id' => 5,
                'name' => 'Đồ chơi búp bê Bonnie',
                'description' => 'Còn mới trông dễ thương lắm nha',
                'images' => 'http://i1.topgia.vn/img/43950/do-choi-bup-be-bonnie-9706b-1-w320x240.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 26,
                'category_id' => 6,
                'name' => 'Hai bình đựng sữa',
                'description' => 'Hai bình đều còn mới nha',
                'images' => 'http://i1.topgia.vn/img/43950/do-choi-bup-be-bonnie-9706b-1-w320x240.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 27,
                'category_id' => 6,
                'name' => 'Xe đạp mini',
                'description' => 'Bé nhà mình lớn lên không dùng nữa',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSpKM8JD0yI8kGAxnHNIQPn6y_Kp7JCVb0G1NKFWt6PbJ5cYy_Uw',
                'age_range' => 4,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 28,
                'category_id' => 6,
                'name' => 'Cũi gỗ',
                'description' => 'Cũi còn mới nha',
                'images' => 'http://www.wonderhouse.vn/wp-content/uploads/2016/07/giuong-cui-nobita-1.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 29,
                'category_id' => 6,
                'name' => 'Chậu nhựa',
                'description' => 'Bé nhà mình đã lớn không còn dùng nữa',
                'images' => 'http://momandbaby.com.vn/wp-content/uploads/2017/09/B%E1%BB%93n-t%E1%BA%AFm-cho-tr%E1%BA%BB-s%C6%A1-sinh.jpg',
                'age_range' => 1,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'account_id' => 30,
                'category_id' => 6,
                'name' => 'Bộ ăn dặm',
                'description' => 'Còn mới nguyên cả bộ nha',
                'images' => 'http://mecuti.vn/wp-content/uploads/2014/10/che-bien-mon-an-dam-cho-be-va-do-dung-cho-be-an-can-chuan-bi-nhung-gi-2.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
