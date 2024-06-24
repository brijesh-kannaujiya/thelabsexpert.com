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
            // PermissionSeeder::class,
            // UserSeeder::class,
            // SettingSeeder::class,
            // LanguageSeeder::class,
            // VialSeeder::class,
            // SpecimenSeeder::class,
            CategorySeeder::class,
            // TestSeeder::class,
            // PackageSeeder::class,
            // NewPermissionSeeder::class,
        ]);

        DB::table('activity_log')->truncate();
    }
}
