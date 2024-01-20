<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shift::factory()->create([
            'date' => '2024-01-20',
            'user_id' => '1'
        ]);
        Shift::factory()->create([
            'date' => '2024-01-21',
            'user_id' => '2'
        ]);
        Shift::factory()->create([
            'date' => '2024-01-22',
            'user_id' => '3'
        ]);
    }
}
