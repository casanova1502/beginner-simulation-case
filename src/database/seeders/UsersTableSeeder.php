<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => '吉田啓介',
            'email' => 'ptkr.psyot2021@gmail.com',
            'password' => Hash::make('arsenic4423'),
            'profile_photo' => '',
            'post_code' => '056-0022', 
            'address' => '北海道日高郡新ひだか町静内高砂町3丁目',
            'building' => '公営住宅',
            ],
        ]);
    }
}
