<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\User::create([
             'first_name' => 'Admin',
             'email' => 'admin@gmail.com',
             'password' => Hash::make('Pa$$w0rd!')
         ]);

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = [
            'student',
            'instructor',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

    }
}
