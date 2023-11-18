<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentShortcutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_shortcuts')->insert([
            [
                'name' => 'スタバ',
                'price' => 599,
                'payment_id' => 10004,
                'bank_id' => 102,
            ],
        ]);
    }
}
