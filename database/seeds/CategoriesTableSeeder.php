<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Quần áo',
                'description' => '',
                'thumbnail' => 'https://bizweb.dktcdn.net/100/042/300/themes/55369/assets/menu_icon_3.png?1513314074912',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mũ',
                'description' => '1',
                'thumbnail' => 'https://vn-live-02.slatic.net/original/19e1737914da112ed0b26c3b89b13ddd.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Giày dép',
                'description' => '1',
                'thumbnail' => 'https://sieuthikid.com/wp-content/uploads/2013/08/mua-sam-giay-dep-cho-be-voi-nhung-meo-cuc-doc-0.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Đồ dùng',
                'description' => '1',
                'thumbnail' => 'http://babyborn.vn/Images/Product/ghe-nga-nam-an-cho-tre-so-sinh-to-toddler.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Đồ chơi',
                'description' => '1',
                'thumbnail' => 'https://media.bibomart.net/u/bbm/product/2015/08/25/17/48/410_410/360215_xe_3_banh_cho_be_1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
