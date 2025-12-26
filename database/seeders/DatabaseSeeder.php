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
        if (env('APP_ENV') === 'local') {
            $this->call([LocalSeeder::class]);
        } else if (env('APP_ENV') === 'dev') {
            $this->call([DevSeeder::class]);
        } else if (env('APP_ENV') === 'prod') {
            $this->call([ProdSeeder::class]);
        }
    }
}
