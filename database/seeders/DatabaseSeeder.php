<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            RegionSeeder::class,
            ProvincesSeeder::class,
            TitleSeeder::class,
           
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Student::factory(100)->create();
        \App\Models\Teacher::factory(100)->create();
    }
}
