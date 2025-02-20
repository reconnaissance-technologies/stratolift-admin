<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolePermissionSeeder::class);

       // Create a Super Admin user
       $superAdmin = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password123'),
        ]);
        $superAdmin->assignRole('Super Admin');

        // Create an Admin user
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
        ]);
        $admin->assignRole('Admin');

        // Create a Client user
        $client = User::factory()->create([
            'name' => 'Client User',
            'email' => 'client@example.com',
            'password' => bcrypt('password123'),
        ]);
        $client->assignRole('Client');

        // Create a Technician user
        $technician = User::factory()->create([
            'name' => 'Technician User',
            'email' => 'technician@example.com',
            'password' => bcrypt('password123'),
        ]);
        $technician->assignRole('Technician');
    }
}
