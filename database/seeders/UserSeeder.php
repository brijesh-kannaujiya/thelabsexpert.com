<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        Role::truncate();

        RolePermission::truncate();

        UserRole::truncate();

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@thexpertlab.com',
            'password' => Hash::make('123456'),
            'token' => Str::random(32),
        ]);

        $role = Role::create([
            'name' => 'Super admin'
        ]);

        //asign permissions to role
        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            RolePermission::create([
                'role_id' => $role['id'],
                'permission_id' => $permission['id']
            ]);
        }

        //asign role to user
        UserRole::create([
            'role_id' => $role['id'],
            'user_id' => $user['id']
        ]);
    }
}
