<?php

namespace Database\Seeders\Local\User;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    public array $defaultUsers = [
        [
            'email' => 'super_admin@example.com',
            'name' => 'Super Admin',
        ],
        [
            'email' => 'admin@example.com',
            'name' => 'Admin',
        ],
        [
            'email' => 'user@example.com',
            'name' => 'User Muser',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->defaultUsers as $user) {
            if (User::where('email', $user['email'])->count() === 0) {
                User::create([
                    'email' => $user['email'],
                    'name' => $user['name'],
                    'email_verified_at' => now(),
                    'password' => Hash::make($user['email']),
                ]);
            }
        }
    }
}
