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
            'item_photo' => 'storage/Armani+Mens+Clock.jpg',
            'category_id' => 1,
            'condition_id' => 1,
            'brand_name' => '',
            'description' => 'スタイリッシュなデザインのメンズ腕時計' ,
            'price' => '15000',
            ],
            [
            'id' => '2',
            'name' => 'HDD',
            'user_id' => 1,
            'item_photo' => 'storage/HDD+Hard+Disk.jpg',
            'category_id' => 2,
            'condition_id' => 2,
            'brand_name' => '',
            'description' => '高速で信頼性の高いハードディスク' ,
            'price' => '5000',
            ],
            [
            'id' => '3',
            'name' => '玉ねぎ3束',
            'user_id' => 1,
            'item_photo' => 'storage/iLoveIMG+d.jpg',
            'category_id' => 10,
            'condition_id' => 3,
            'brand_name' => '',
            'description' => '新鮮な玉ねぎ3束のセット' ,
            'price' => '300',
            ],
            [
            'id' => '4',
            'name' => '革靴',
            'user_id' => 1,
            'item_photo' => 'storage/Leather+Shoes+Product+Photo.jpg',
            'category_id' => 1,
            'condition_id' => 4,
            'brand_name' => '',
            'description' => 'クラシックなデザインの革靴' ,
            'price' => '4000',
            ],
            [
            'id' => '5',
            'name' => 'ノートPC',
            'user_id' => 1,
            'item_photo' => 'storage/Living+Room+Laptop.jpg',
            'category_id' => 2,
            'condition_id' => 1,
            'brand_name' => '',
            'description' => '高性能なノートパソコン' ,
            'price' => '45000',
            ],
            [
            'id' => '6',
            'name' => 'マイク',
            'user_id' => 1,
            'item_photo' => 'storage/Music+Mic+4632231.jpg',
            'category_id' => 13,
            'condition_id' => 2,
            'brand_name' => '',
            'description' => '高音質のレコーディング用マイク' ,
            'price' => '8000',
            ],
            [
            'id' => '7',
            'name' => 'ショルダーバッグ',
            'user_id' => 1,
            'item_photo' => 'storage/Purse+fashion+pocket.jpg',
            'category_id' => 1,
            'condition_id' => 3,
            'brand_name' => '',
            'description' => 'おしゃれなショルダーバッグ' ,
            'price' => '3500',
            ],
            [
            'id' => '8',
            'name' => 'タンブラー',
            'user_id' => 1,
            'item_photo' => 'storage/Tumbler+souvenir.jpg',
            'category_id' => 10,
            'condition_id' => 4,
            'brand_name' => '',
            'description' => '使いやすいタンブラー' ,
            'price' => '500',
            ],
            [
            'id' => '9',
            'name' => 'コーヒーミル',
            'user_id' => 1,
            'item_photo' => 'storage/Waitress+with+Coffee+Grinder.jpg',
            'category_id' => 10,
            'condition_id' => 1,
            'brand_name' => '',
            'description' => '手動のコーヒーミル' ,
            'price' => '4000',
            ],
            [
            'id' => '10',
            'name' => 'メイクセット',
            'user_id' => 1,
            'item_photo' => 'storage/外出メイクアップセット.jpg',
            'category_id' => 6,
            'condition_id' => 2,
            'brand_name' => '',
            'description' => '便利なメイクアップセット' ,
            'price' => '2500',
            ],
        ]);
    }
}
