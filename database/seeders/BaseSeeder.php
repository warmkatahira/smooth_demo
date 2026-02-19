<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// モデル
use App\Models\Base;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Base::create([
            'base_id' => 'xxx',
            'base_name' => 'XXX倉庫',
            'base_color_code' => '#e5fff4',
            'mieru_customer_code' => 'demo',
            'sort_order' => 1,
        ]);
    }
}
