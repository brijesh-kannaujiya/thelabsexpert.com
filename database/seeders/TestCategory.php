<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Tests = Test::get();

        foreach ($Tests as $test) {
            if ($test->category_id != null) {
                TestCategory::create([
                    'category_id' => $test->category_id,
                    'test_id' => $test->id
                ]);
            }
        }

        echo "done";
    }
}
