<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            ['id' => 101, 'bank' => '現金', 'forward' => 2566, 'created_at' => '2021-05-01 00:00:00'],
            ['id' => 102, 'bank' => 'PayPay', 'forward' => 6763, 'created_at' => '2021-05-01 00:00:00'],
            ['id' => 103, 'bank' => 'SUGOCA', 'forward' => 4, 'created_at' => '2021-05-01 00:00:00'],
            ['id' => 104, 'bank' => 'SUGOCA2', 'forward' => 1217, 'created_at' => '2021-05-01 00:00:00'],
            ['id' => 105, 'bank' => 'WAON', 'forward' => 0, 'created_at' => '2021-05-16 00:00:00'],
            ['id' => 106, 'bank' => '福銀(デビット）', 'forward' => 452, 'created_at' => '2021-05-01 00:00:00'],
            ['id' => 107, 'bank' => '西銀', 'forward' => 9637, 'created_at' => '2021-05-01 00:00:00'],
            ['id' => 108, 'bank' => '貯金予備軍', 'forward' => 19200, 'created_at' => '2021-05-01 00:00:00'],
            ['id' => 109, 'bank' => 'ゆうちょ', 'forward' => 0, 'created_at' => '2021-08-13 00:00:00'],
            ['id' => 110, 'bank' => 'ひびき', 'forward' => 0, 'created_at' => '2021-08-13 00:00:00'],
            ['id' => 111, 'bank' => '目的預金', 'forward' => 0, 'created_at' => '2021-09-12 00:00:00'],
            ['id' => 112, 'bank' => '取り置き', 'forward' => 0, 'created_at' => '2021-11-26 00:00:00'],
        ]);
    }
}
