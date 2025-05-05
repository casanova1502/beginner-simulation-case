<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayWaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pay_ways')->insert([
            [
                'id' => '1',
                'name' => 'コンビニ支払い',
            ],
            [
                'id' => '2',
                'name' => 'カード支払い',
            ],
        ]);
    }
}
