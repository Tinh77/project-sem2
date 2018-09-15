<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('images')->truncate();
        DB::table('images')->insert([
            [
                'link' => 'https://media.bibomart.net/u/bbm/product/2016/01/27/17/47/1000_1000/ao-so-sinh-carter-mau-day-s9-102913-4_1.jpg',
                'gift_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://media.bibomart.net/u/bbm/product/2016/01/27/17/47/1000_1000/ao-so-sinh-carter-mau-day-s9-102913-4_1.jpg',
                'gift_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://media.bibomart.net/u/bbm/product/2015/06/09/01/36/101632-a_1.jpg',
                'gift_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://media.bibomart.net/u/bbm/product/2016/01/27/17/47/1000_1000/ao-so-sinh-carter-mau-day-s9-102913-4_1.jpg',
                'gift_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://media.bibomart.net/u/bbm/product/2013/05/10/15/27/300_300/ao-lullaby-cai-giua-trang-6m-040247-3.jpg',
                'gift_id' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://muachungcdn.com/thumb_w/550,99/i:product/128/3/i2bfy/combo-8-quan-dai-cotton-cho-be-so-sinh.jpg',
                'gift_id' => 6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://shopbabyfun.com.vn/media/product/2441263_1_765_quan_lien_tat_2_5225.jpg',
                'gift_id' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://vn-live-02.slatic.net/original/dcc5319607945e862661190be63a7adc.jpg',
                'gift_id' => 8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/cache/1/small_image/200x/9df78eab33525d08d6e5fb8d27136e95/i/m/img_1857.jpg',
                'gift_id' => 9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://kidsplaza-1.cdn.vccloud.vn/media/wysiwyg/product/do-so-sinh/mu-so-sinh-kuku-ku2155-1.jpg',
                'gift_id' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://kidsplaza-1.cdn.vccloud.vn/media/catalog/product/cache/1/small_image/200x/9df78eab33525d08d6e5fb8d27136e95/m/u/mu-phot-cham-bi-4273-1.jpg',
                'gift_id' => 11,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
            ,
            [
                'link' => 'https://moki.vn/images/images/Anhtintuc/anhtintuc-4/chon-mu-cho-tre-mua-he%202.jpg',
                'gift_id' => 12,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://media.bibomart.net/u/bbm/product/2017/01/20/22/17/300_300/mu-ss-2-tai-bibos-trang-vien-hong-3m-113466_1.jpg',
                'gift_id' => 13,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwftfJ_WJPDGqAkfuVUYTcTsgtHV3qPHURMJOEtfCv-9s8b6fz',
                'gift_id' => 14,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4y91B_0R5lx4c_EsRuYvJWekVh0NwyNx1MzmDL-HWZYtayKD7',
                'gift_id' => 15,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAGQRk9x24f2P5aOSAgzXG3fC-mC9Wia2Ogydr5UUOtYvFI8hHrw',
                'gift_id' => 16,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD-W5wl3shniZBjplsKo1x1craqwUwmQqhN0OiEHPo5QMacxQM',
                'gift_id' => 17,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrHR7dXsuLFKEfX6Lv-2v5SKUaHYT-dIwlYqgnpzE2drI4UYbLuA',
                'gift_id' => 18,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBPFj5jV_kK4hBYBWvkGV-7xuAWFqLg_LrQ9BxWnwV8IwpDDXQ',
                'gift_id' => 19,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBPFj5jV_kK4hBYBWvkGV-7xuAWFqLg_LrQ9BxWnwV8IwpDDXQ',
                'gift_id' => 20,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBPFj5jV_kK4hBYBWvkGV-7xuAWFqLg_LrQ9BxWnwV8IwpDDXQ',
                'gift_id' => 21,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxclbTawAjFjJyV6wA6Qb36kdFZeM9qp13l7dnJIilPQSlis2AQw',
                'gift_id' => 22,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'http://www.bongkids.com/data/Product/xe-oto-tha-hinh_1421031547.jpg',
                'gift_id' => 23,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'http://voviz.net/wp-content/uploads/2017/03/do-choi-go-gcb-dap-coc-vui-nhon-db081-30112016100432.jpg',
                'gift_id' => 24,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'http://sw001.hstatic.net/6/090639cccd7b1e/bup-be-tomy-licca-ld-09-cute-ballerina-fashion-doll_large.jpg',
                'gift_id' => 25,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'http://chosaigon24h.vn/upload/images/trum-ban-do-choi-bup-be-nau-an-tre-em-gia-re-hcm3.jpg',
                'gift_id' => 26,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSpKM8JD0yI8kGAxnHNIQPn6y_Kp7JCVb0G1NKFWt6PbJ5cYy_Uw',
                'gift_id' => 27,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'http://www.wonderhouse.vn/wp-content/uploads/2016/07/giuong-cui-nobita-1.jpg',
                'gift_id' => 28,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'http://momandbaby.com.vn/wp-content/uploads/2017/09/B%E1%BB%93n-t%E1%BA%AFm-cho-tr%E1%BA%BB-s%C6%A1-sinh.jpg',
                'gift_id' => 29,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'link' => 'http://mecuti.vn/wp-content/uploads/2014/10/che-bien-mon-an-dam-cho-be-va-do-dung-cho-be-an-can-chuan-bi-nhung-gi-2.jpg',
                'gift_id' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]



        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
