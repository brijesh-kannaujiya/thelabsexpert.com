<?php

namespace Database\Seeders;

use App\Models\Specimen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Specimen::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('specimens')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Specimen::create([
            'name' => 'Blood',
        ]);
        Specimen::create([
            'name' => 'Urine',
        ]);
    }
}
