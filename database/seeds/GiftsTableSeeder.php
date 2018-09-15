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
                'age_range' => 3,
                'gender' => 2,
                'city' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
