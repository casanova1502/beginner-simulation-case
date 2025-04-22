<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->insert([
            [
                'id' => '1',
                'name' => '吉田啓介',
                'email' => 'arsenic4423@gmail.com',
                'password' => 'arsenic4423',
                'verified_password' => 'arsenic4423',
                'profile_photo' => '',
                'post_code' => '056-0022', 
                'address' => '北海道日高郡新ひだか町静内高砂町3丁目',
                'building' => '公営住宅',
            ],
        ])
    }
}
