<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (env('APP_ENV') === 'local' || env('APP_ENV') === 'dev') {
            $this->call([DevSeeder::class]);
        } else {
            $this->call([ProdSeeder::class]);
        }
    }
}
