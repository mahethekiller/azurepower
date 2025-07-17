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
        $adminRole  = Role::firstOrCreate(['name' => 'admin']);
        $editorRole = Role::firstOrCreate(['name' => 'editor']);
        $userRole   = Role::firstOrCreate(['name' => 'user']);

        // Create a user and assign the 'admin' role
        // Create admin user if not exists
        $user = User::firstOrCreate(
            ['email' => 'test@example.com'], // Lookup by email
            [
                'name'     => 'Mahendra',
                'password' => Hash::make('12345678'),
            ]
        );
        $user->assignRole($adminRole);

        $this->call([
            DocumentTypesSeeder::class,
        ]);
    }
}
