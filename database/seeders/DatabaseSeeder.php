<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $editorRole = Role::create(['name' => 'editor']);
        $userRole = Role::create(['name' => 'user']);

        // Create a user and assign the 'admin' role
        $user = User::factory()->create([
            'name' => 'Mahendra',
            'email' => 'test@example.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole($adminRole);
    }
}

