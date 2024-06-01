<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::truncate();
        Language::insert([
            [
                'iso' => 'ar',
                'rtl' => true
            ],
            [
                'iso' => 'en',
                'rtl' => false
            ],
            [
                'iso' => 'de',
                'rtl' => false
            ],
            [
                'iso' => 'es',
                'rtl' => false
            ],
            [
                'iso' => 'et',
                'rtl' => false
            ],
            [
                'iso' => 'fa',
                'rtl' => true
            ],
            [
                'iso' => 'fr',
                'rtl' => false
            ],
            [
                'iso' => 'id',
                'rtl' => false
            ],
            [
                'iso' => 'it',
                'rtl' => false
            ],
            [
                'iso' => 'nl',
                'rtl' => false
            ],
            [
                'iso' => 'de',
                'rtl' => false
            ],
            [
                'iso' => 'pl',
                'rtl' => false
            ],
            [
                'iso' => 'pt',
                'rtl' => false
            ],
            [
                'iso' => 'ro',
                'rtl' => false
            ],
            [
                'iso' => 'ru',
                'rtl' => false
            ],
            [
                'iso' => 'th',
                'rtl' => false
            ],
            [
                'iso' => 'tr',
                'rtl' => false
            ],
            [
                'iso' => 'pt-br',
                'rtl' => false
            ],
            [
                'iso' => 'zh-cn',
                'rtl' => false
            ],
            [
                'iso' => 'zh-tw',
                'rtl' => false
            ],
        ]);
    }
}
