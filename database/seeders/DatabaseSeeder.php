<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // CountriesSeeder::class,
            // TimezoneSeeder::class,
            // BranchSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
            // CurrencySeeder::class,
            SettingSeeder::class,
            // CategoriesSeeder::class,
            // TestsSeeder::class,
            // CulturesSeeder::class,
            // CultureOptionsSeeder::class,
            // PatientSeeder::class,
            LanguageSeeder::class,
        ]);

        DB::table('activity_log')->truncate();
    }
}
