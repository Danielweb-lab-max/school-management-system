<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Call your seeders here
        $this->call([
            StudentsTableSeeder::class,
            CoursesTableSeeder::class,
            CourseCategoriesTableSeeder::class,
            // Add other seeders if needed
        ]);
    }
}
