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
        $vials_module = Module::Create([
            'name' => 'Vials'
        ]);

        Permission::insert(
            [
                [
                    'module_id' => $vials_module['id'],
                    'key' => 'view_vials',
                    'name' => 'View'
                ],
                [
                    'module_id' => $vials_module['id'],
                    'key' => 'create_vials',
                    'name' => 'Create'
                ],
                [
                    'module_id' => $vials_module['id'],
                    'key' => 'edit_vials',
                    'name' => 'Edit'
                ],
                [
                    'module_id' => $vials_module['id'],
                    'key' => 'delete_vials',
                    'name' => 'Delete'
                ],
            ]
        );
    }
}
