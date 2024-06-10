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
        $specimens_module = Module::Create([
            'name' => 'Specimen'
        ]);

        Permission::insert(
            [
                [
                    'module_id' => $specimens_module['id'],
                    'key' => 'view_specimen',
                    'name' => 'View'
                ],
                [
                    'module_id' => $specimens_module['id'],
                    'key' => 'create_specimen',
                    'name' => 'Create'
                ],
                [
                    'module_id' => $specimens_module['id'],
                    'key' => 'edit_specimen',
                    'name' => 'Edit'
                ],
                [
                    'module_id' => $specimens_module['id'],
                    'key' => 'delete_specimen',
                    'name' => 'Delete'
                ]
            ]
        );
    }
}
