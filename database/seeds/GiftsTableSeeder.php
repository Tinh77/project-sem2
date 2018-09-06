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
                'account_id' => 4,
                'category_id' => '1',
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
                'account_id' => 4,
                'category_id' => 1,
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
                'account_id' => 4,
                'category_id' => 1,
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
                'account_id' => 4,
                'category_id' => 1,
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
                'account_id' => 4,
                'category_id' => 2,
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
                'account_id' => 4,
                'category_id' => 2,
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
                'account_id' => 4,
                'category_id' => 2,
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
                'account_id' => 4,
                'category_id' => 2,
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
                'account_id' => 4,
                'category_id' => 2,
                'name' => 'Mũ Bibos',
                'description' => 'Mình được người thân tặng mũ mà con mình không đội vừa nên muốn để lại cho các bé',
                'images' => 'https://media.bibomart.net/u/bbm/product/2017/01/20/22/17/300_300/mu-ss-2-tai-bibos-trang-vien-hong-3m-113466_1.jpg',
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
