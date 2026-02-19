<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// モデル
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'item_code' => 'a-1-0000',
            'item_jan_code' => '1111111111111',
            'item_name' => '商品A ±0.00',
            'item_category' => 'コンタクトレンズ',
            'exp_start_position' => 16,
            'lot_1_start_position' => 20,
            'lot_1_length' => 6,
            'is_stock_managed' => 1,
            'sort_order' => 1,
        ]);
        Item::create([
            'item_code' => 'a-1-0100',
            'item_jan_code' => '2222222222222',
            'item_name' => '商品A -1.00',
            'item_category' => 'コンタクトレンズ',
            'exp_start_position' => 16,
            'lot_1_start_position' => 20,
            'lot_1_length' => 6,
            'is_stock_managed' => 1,
            'sort_order' => 1,
        ]);
        Item::create([
            'item_code' => 'a-1-0200',
            'item_jan_code' => '3333333333333',
            'item_name' => '商品A -2.00',
            'item_category' => 'コンタクトレンズ',
            'exp_start_position' => 16,
            'lot_1_start_position' => 20,
            'lot_1_length' => 6,
            'is_stock_managed' => 1,
            'sort_order' => 1,
        ]);
        Item::create([
            'item_code' => 'a-1-0300',
            'item_jan_code' => '4444444444444',
            'item_name' => '商品A -3.00',
            'item_category' => 'コンタクトレンズ',
            'exp_start_position' => 16,
            'lot_1_start_position' => 20,
            'lot_1_length' => 6,
            'is_stock_managed' => 1,
            'sort_order' => 1,
        ]);
    }
}
