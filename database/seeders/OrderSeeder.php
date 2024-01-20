<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()->create([
            'order' => 'Капучино, омлет с овощами, тост с авокадо'
        ]);
        Order::factory()->create([
            'order' => 'Эспрессо, французский круассан, греческий салат'
        ]);
        Order::factory()->create([
            'order' => 'Латте, яичница с беконом, блины с медом'
        ]);
        Order::factory()->create([
            'order' => 'Американо, бутерброд с лососем, фруктовый салат'
        ]);
    }
}
