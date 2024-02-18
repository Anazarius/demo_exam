<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'title' => 'accept'
        ]);
        Category::factory()->create([
            'title' => 'preparing'
        ]);
        Category::factory()->create([
            'title' => 'ready'
        ]);
        Category::factory()->create([
            'title' => 'given'
        ]);
        Category::factory()->create([
            'title' => 'paid'
        ]);
    }
}
