<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory()->count(10)->create();
        Product::factory()->count(10)->create();
    }

}
