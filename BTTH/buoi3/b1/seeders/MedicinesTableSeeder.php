<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('medicines')->insert([
            [
                'name' => 'Paracetamol',
                'brand' => 'ABC Pharma',
                'dosage' => '500mg tablets',
                'form' => 'Tablet',
                'price' => 2000.00,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amoxicillin',
                'brand' => 'XYZ Meds',
                'dosage' => '250mg capsules',
                'form' => 'Capsule',
                'price' => 5000.00,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
