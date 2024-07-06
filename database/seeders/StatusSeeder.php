<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('statuses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $datas = [
            'Open',
            'On the way',
            'Reached',
            'Collected',
            'Postponed',
            'Cancelled',
        ];
        foreach ($datas as $name) {
            Status::create([
                'name' => $name,
            ]);
        }
    }
}
