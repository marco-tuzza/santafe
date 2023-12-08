<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Brunch Menu
        Category::create(['name' => 'Eggs', 'submenu_id'=> 1, 'order' => 1]);
        Category::create(['name' => 'Oatmeal', 'submenu_id' => 1, 'order' => 2]);
        Category::create(['name' => 'Toast', 'submenu_id' => 1, 'order' => 3]);

        // Restaurant Menu
        Category::create(['name' => 'Appetizers', 'submenu_id' => 2, 'order' => 1]);
        Category::create(['name' => 'Salads', 'submenu_id' => 2, 'order' => 2]);
        Category::create(['name' => 'Entrees', 'submenu_id' => 2, 'order' => 3]);

        // Dolci Menu
        Category::create(['name' => 'Cakes', 'submenu_id' => 4, 'order' => 1]);
        Category::create(['name' => 'Cookies', 'submenu_id' => 4, 'order' => 2]);
        Category::create(['name' => 'Ice Cream', 'submenu_id' => 4, 'order' => 3]);
    }
}
