<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfStaff = 10;

        for ($i = 1; $i <= $numberOfStaff; $i++) {
            DB::table('staff')->insert([
                'first_name' => 'FirstName' . $i,
                'last_name' => 'LastName' . $i,
                'email' => 'staff' . $i . '@example.com',
                'phone' => '123-456-789' . $i,
                'position' => 'Position' . $i,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
