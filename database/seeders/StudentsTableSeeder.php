<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Student::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'birthdate' => $faker->date,
                'gender' => $faker->randomElement(['male', 'female', 'other']),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'image' => $faker->imageUrl, // Example image URL
            ]);
        }
    }
}
