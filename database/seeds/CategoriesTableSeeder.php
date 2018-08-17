<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ],
            [
                'name' => 'Mũ',
                'description' => '1',
                'thumbnail' => 'https://vn-live-02.slatic.net/original/19e1737914da112ed0b26c3b89b13ddd.jpg',
            ],
            [
                'name' => 'Giày dép',
                'description' => '1',
                'thumbnail' => 'https://sieuthikid.com/wp-content/uploads/2013/08/mua-sam-giay-dep-cho-be-voi-nhung-meo-cuc-doc-0.jpg',
            ],
            [
                'name' => 'Đồ dùng',
                'description' => '1',
                'thumbnail' => 'http://babyborn.vn/Images/Product/ghe-nga-nam-an-cho-tre-so-sinh-to-toddler.jpg',
            ],
            [
                'name' => 'Đồ chơi',
                'description' => '1',
                'thumbnail' => 'https://media.bibomart.net/u/bbm/product/2015/08/25/17/48/410_410/360215_xe_3_banh_cho_be_1.jpg',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
