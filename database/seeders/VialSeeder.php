<?php

namespace Database\Seeders;

use App\Models\Vial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vial::truncate();
        Vial::create([
            'name' => 'Vial 1',
        ]);
    }
}
