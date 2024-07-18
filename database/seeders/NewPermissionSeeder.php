<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //packages
        $packages_module = Module::Create([
            'name' => 'Appointment'
        ]);

        Permission::insert(
            [
                [
                    'module_id' => $packages_module['id'],
                    'key' => 'view_appointment',
                    'name' => 'View'
                ],
                [
                    'module_id' => $packages_module['id'],
                    'key' => 'done_appointment',
                    'name' => 'Done'
                ],
            ]
        );
    }
}
