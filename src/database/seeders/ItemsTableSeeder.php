<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'id' => '1',
            'name' => '腕時計',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/Armani+Mens+Clock.jpg',
            'item_detail' => '',
            'condition_id' => 1,
            'brand_name' => '',
            'description' => 'スタイリッシュなデザインのメンズ腕時計' ,
            'price' => '15,000';
            ],
            [
            'id' => '2',
            'name' => 'HDD',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/HDD+Hard+Disk.jpg',
            'item_detail' => '',
            'condition_id' => 2,
            'brand_name' => '',
            'description' => '高速で信頼性の高いハードディスク' ,
            'price' => '5000';
            ],
            [
            'id' => '3',
            'name' => '玉ねぎ3束',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/iLoveIMG+d.jpg',
            'item_detail' => '',
            'condition_id' => 3,
            'brand_name' => '',
            'description' => '新鮮な玉ねぎ3束のセット' ,
            'price' => '300';
            ],
            [
            'id' => '4',
            'name' => '革靴',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/Leather+Shoes+Product+Photo.jpg',
            'item_detail' => '',
            'condition_id' => 4,
            'brand_name' => '',
            'description' => 'クラシックなデザインの革靴' ,
            'price' => '4000';
            ],
            [
            'id' => '5',
            'name' => 'ノートPC',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/Living+Room+Laptop.jpg',
            'item_detail' => '',
            'condition_id' => 1,
            'brand_name' => '',
            'description' => '高性能なノートパソコン' ,
            'price' => '45000';
            ],
            [
            'id' => '6',
            'name' => 'マイク',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/Music+Mic+4632231.jpg',
            'item_detail' => '',
            'condition_id' => 2,
            'brand_name' => '',
            'description' => '高音質のレコーディング用マイク' ,
            'price' => '8000';
            ],
            [
            'id' => '7',
            'name' => 'ショルダーバッグ',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/Purse+fashion+pocket.jpg',
            'item_detail' => '',
            'condition_id' => 3,
            'brand_name' => '',
            'description' => 'おしゃれなショルダーバッグ' ,
            'price' => '3500';
            ],
            [
            'id' => '8',
            'name' => 'タンブラー',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/Tumbler+souvenir.jpg',
            'item_detail' => '',
            'condition_id' => 4,
            'brand_name' => '',
            'description' => '使いやすいタンブラー' ,
            'price' => '500';
            ],
            [
            'id' => '9',
            'name' => 'コーヒーミル',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/Waitress+with+Coffee+Grinder.jpg',
            'item_detail' => '',
            'condition_id' => 1,
            'brand_name' => '',
            'description' => '手動のコーヒーミル' ,
            'price' => '4000';
            ],
            [
            'id' => '10',
            'name' => 'メイクセット',
            'user_id' => 1,
            'item_photo' => 'storage/app/public/外出メイクアップセット.jpg',
            'item_detail' => '',
            'condition_id' => 2,
            'brand_name' => '',
            'description' => '便利なメイクアップセット' ,
            'price' => '2500';
            ],
        ])
    }
}
