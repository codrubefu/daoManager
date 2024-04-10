<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => 'manage-users']);
        Permission::create(['name' => 'manage-clubs']);

        $superAdmin = Role::create(['name' => 'SuperAdmin']);
        $clubAdminRole = Role::create(['name' => 'ClubAdmin']);
        $clubEditor = Role::create(['name' => 'Editor']);

        $superAdmin->givePermissionTo([
            'manage-users',
            'manage-clubs'
        ]);
    }
}
