<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            ['id' => 10001, 'payment' => '食費'],
            ['id' => 10002, 'payment' => '外食代'],
            ['id' => 10003, 'payment' => '交遊費'],
            ['id' => 10004, 'payment' => 'スタバ'],
            ['id' => 10005, 'payment' => '服・靴'],
            ['id' => 10006, 'payment' => 'アクセサリー'],
            ['id' => 10007, 'payment' => '化粧・スキンケア'],
            ['id' => 10008, 'payment' => '電子書籍'],
            ['id' => 10009, 'payment' => '本'],
            ['id' => 10010, 'payment' => '楽譜'],
            ['id' => 10011, 'payment' => 'サブスク'],
            ['id' => 10012, 'payment' => '携帯代'],
            ['id' => 10013, 'payment' => 'SixTONES'],
            ['id' => 10014, 'payment' => 'SixTONES外'],
            ['id' => 10015, 'payment' => '機械類'],
            ['id' => 10016, 'payment' => '交通費'],
            ['id' => 10017, 'payment' => 'その他（必要経費）'],
            ['id' => 10018, 'payment' => 'ガチでその他'],
            ['id' => 10019, 'payment' => '使途不明金'],
            ['id' => 10020, 'payment' => '勉強'],
            ['id' => 10021, 'payment' => '工作'],
            ['id' => 10022, 'payment' => 'ママ'],
            ['id' => 10023, 'payment' => '立替'],
            ['id' => 10024, 'payment' => 'クレヨンしんちゃん'],
            ['id' => 10025, 'payment' => '文具'],
            ['id' => 10026, 'payment' => '医療費'],
            ['id' => 10027, 'payment' => '収納・家具'],
            ['id' => 10028, 'payment' => '仕事'],
        ]);
    }
}
