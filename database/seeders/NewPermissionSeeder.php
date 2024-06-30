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
            'name' => 'booking'
        ]);

        Permission::insert(
            [
                [
                    'module_id' => $packages_module['id'],
                    'key' => 'view_booking',
                    'name' => 'View'
                ],
                [
                    'module_id' => $packages_module['id'],
                    'key' => 'create_booking',
                    'name' => 'Create'
                ],
                [
                    'module_id' => $packages_module['id'],
                    'key' => 'edit_booking',
                    'name' => 'Edit'
                ],
                [
                    'module_id' => $packages_module['id'],
                    'key' => 'delete_booking',
                    'name' => 'Delete'
                ],
            ]
        );
    }
}
