<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::create([
            'category_id' => 1,
            'vial_id' => 1,
            'specimen_id' => 1,
            'test_name' => 'test_name',
            'test_code' => 'EXP0001',
            'mrp_price' => '800',
            'price' => '399',
            'report_date' => '07-Feb-1976',
            'fasting' => 'Incididunt qui exped',
            'customer_instructions' => 'Incididunt qui exped',
            'phlebo_instructions' => 'Incididunt qui exped',
            'icon' => 'admin/test/icon/icon.png',
            'banner' => 'admin/test/banner/banner.png',
            'short_desc' => 'Incididunt qui exped',
            'desc_1' => '<p>Et consequat Commod</p>',
            'desc_2' => '<p>Et consequat Commod</p>',
        ]);
    }
}
