<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['category_name' => 'Чай']);
        Category::create(['category_name' => 'Кофе']);
    }
}
