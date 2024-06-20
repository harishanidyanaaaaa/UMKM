<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $roles = [
            'admin',
            'user',
        ];

        foreach ($roles as $role) {
            \Spatie\Permission\Models\Role::create(['name' => $role]);
        }

        // Create permissions
        $permissions = [
            'create',
            'read',
            'update',
            'delete',
        ];

        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $rolePermissions = [
            'admin' => ['create', 'read', 'update', 'delete'],
            'user' => ['read'],
        ];

        foreach ($rolePermissions as $role => $permissions) {
            $role = \Spatie\Permission\Models\Role::findByName($role);
            $role->givePermissionTo($permissions);
        }
    }
}
