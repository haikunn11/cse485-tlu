<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('classes')->insert([
            ['grade_level' => 'Pre-K', 'room_number' => 'VH7', 'created_at' => now(), 'updated_at' => now()],
            ['grade_level' => 'Kindergarten', 'room_number' => 'VH8', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
