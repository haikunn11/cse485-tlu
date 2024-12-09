<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'date_of_birth' => '2018-06-15',
                'parent_phone' => '1234567890',
                'class_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'date_of_birth' => '2017-08-10',
                'parent_phone' => '0987654321',
                'class_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
