<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Package::truncate();
        $package = Package::create([
            'name' => 'Package 4',
            'price' => 100,
            'mrp_price' => 200,
            'icon' => 'admin/test/icon/icon.png',
            'banner' => 'admin/test/banner/banner.png',
            'short_desc' => 'Neque eligendi disti',
        ]);
        $package->tests()->create([
            'testable_id' => 1,
            'testable_type' => 'App\Models\Test'
        ]);
    }
}
