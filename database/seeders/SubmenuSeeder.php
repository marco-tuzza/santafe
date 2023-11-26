<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Submenu;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Submenu::create(['name' => 'Brunch Menu', 'order' => 1]);
        Submenu::create(['name' => 'Restaurant Menu', 'order' => 2]);
        Submenu::create(['name' => 'Pizza Menu', 'order' => 3]);
        Submenu::create(['name' => 'Dolci', 'order' => 4]);
        Submenu::create(['name' => 'Drinks', 'order' => 5]);
    }
}
