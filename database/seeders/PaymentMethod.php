<?php

namespace Database\Seeders;

use App\Models\PaymentMethod as ModelsPaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethod extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('payment_methods')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        $names = [
            "Cash",
            "Bank transfer",
            "Online transfer",
            "cheque",
            "PayTm",
        ];

        foreach ($names as $name) {
            ModelsPaymentMethod::create([
                'name' => $name,
            ]);
        }
    }
}
