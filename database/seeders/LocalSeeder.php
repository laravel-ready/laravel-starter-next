<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Local\User;

class LocalSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // user
            User\DefaultUserSeeder::class,
            User\UserSeeder::class,
        ]);
    }
}
