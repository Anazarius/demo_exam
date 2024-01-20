<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Тимофей',
            'last_name' => 'Капленков',
            'login' => 'Anazarius',
            'role_id' => '1'
        ]);
        User::factory()->create([
            'name' => 'Биг',
            'last_name' => 'Бой',
            'login' => 'Timagg12',
            'role_id' => '2'
        ]);
        User::factory()->create([
            'name' => 'Смол',
            'last_name' => 'Пенсил',
            'login' => 'small',
            'role_id' => '3'
        ]);
    }
}
