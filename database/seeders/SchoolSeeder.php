<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the number of schools you want to create
        $numberOfSchools = 10;

        for ($i = 1; $i <= $numberOfSchools; $i++) {
            DB::table('schools')->insert([
                'school_name' => 'School ' . $i,
                'enrollment_prefix' => 'ENR-' . $i,
                'phone' => '123-456-7890',
                'email' => 'school' . $i . '@example.com',
                'address' => '123 School St, City, Country',
                'enrollment_base_number' => 1000 + $i,
                'enrollment_base_padding' => 4,
                'admission_prefix' => 'ADM-' . $i,
                'admission_base_number' => 2000 + $i,
                'admission_base_padding' => 4,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
