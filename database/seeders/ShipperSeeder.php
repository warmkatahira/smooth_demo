<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// モデル
use App\Models\Shipper;

class ShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shipper::create([
            'shipper_company_name' => '株式会社demo',
            'shipper_name' => 'demoショップ',
            'shipper_zip_code' => '340-0822',
            'shipper_address' => '埼玉県八潮市大瀬921-2',
            'shipper_tel' => '048-995-0001',
        ]);
    }
}
