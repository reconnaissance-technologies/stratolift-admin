<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define permissions
        $permissions = [
            'create-user', // Super Admin, Admin
            'update-user', // Super Admin, Admin
            'delete-user', // Super Admin, Admin
            'view-users', // Super Admin, Admin
            'assign-technicians', // Super Admin, Admin
            'create-maintenance-task', // Super Admin, Admin, Client
            'update-maintenance-task', // Super Admin, Admin
            'delete-maintenance-task', // Super Admin, Admin, Client
            'view-maintenance-tasks', // Super Admin, Admin
            'view-own-maintenance-tasks', // Client
            'update-own-maintenance-tasks', // Client
            'view-assigned-maintenance-tasks', // Technician
            'update-assigned-maintenance-tasks', // Technician
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Define roles and assign permissions
        $roles = [
            'Super Admin' => Permission::all(),
            'Admin' => Permission::whereIn('name', [
                'create-user', // Super Admin, Admin
                'update-user', // Super Admin, Admin
                'delete-user', // Super Admin, Admin
                'view-users', // Super Admin, Admin
                'assign-technicians', // Super Admin, Admin
                'create-maintenance-task', // Super Admin, Admin, Client
                'update-maintenance-task', // Super Admin, Admin
                'delete-maintenance-task', // Super Admin, Admin, Client
                'view-maintenance-tasks', // Super Admin, Admin
                'view-own-maintenance-tasks', // Client
                'update-own-maintenance-tasks', // Client
                'view-assigned-maintenance-tasks', // Technician
                'update-assigned-maintenance-tasks', // 
            ])->get(),

            'Client' => Permission::whereIn('name', [
                'create-maintenance-task', // Super Admin, Admin, Client
                'delete-maintenance-task', // Super Admin, Admin, Client
                'view-own-maintenance-tasks', // Client
                'update-own-maintenance-tasks', // Client
            ])->get(),

            'Technician' => Permission::whereIn('name', [
                'view-assigned-maintenance-tasks', // Technician
                'update-assigned-maintenance-tasks', // Technician
            ])->get(),
        ];

        // Create roles and assign permissions
        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->syncPermissions($rolePermissions);
        }
    }
}
