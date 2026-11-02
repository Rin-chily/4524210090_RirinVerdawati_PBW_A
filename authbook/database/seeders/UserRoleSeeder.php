<?php

namespace database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        // Akun admin
        User::updateOrCreate(
            ['email' => 'rin@example.com'],
            [
                'name' => 'rin',
                'password' => Hash::make('3003'),
                'role' => 'admin',
            ]
        );

        // Akun staff
        User::updateOrCreate(
            ['email' => 'staff@example.com'],
            [
                'name' => 'Staff',
                'password' => Hash::make('123'),
                'role' => 'staff',
            ]
        );

        // Akun viewer
        User::updateOrCreate(
            ['email' => 'viewer@example.com'],
            [
                'name' => 'Viewer',
                'password' => Hash::make('123'),
                'role' => 'viewer',
            ]
        );
    }
}
