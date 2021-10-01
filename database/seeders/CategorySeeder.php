<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory()->times('7')->create();

        Category::create(['name' => 'Health & Beauty']);
        Category::create(['name' => 'Electronics']);
        Category::create(['name' => 'Home & Office']);
        Category::create(['name' => 'Phones & Tablets']);
        Category::create(['name' => 'Gaming']);
        Category::create(['name' => 'Computing']);
        Category::create(['name' => 'Garden & Outdoors']);
        Category::create(['name' => 'Fashion']);
        Category::create(['name' => 'Sporting Goods']);
        Category::create(['name' => 'Baby Products']);

    }
}
