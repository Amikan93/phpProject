<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Зеленый чай',
            'price' => 100.00,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Черный чай',
            'price' => 120.00,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Чай пуэр',
            'price' => 300.00,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Молочный улун',
            'price' => 300.00,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Молотый кофе',
            'price' => 600.00,
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Растворимый кофе',
            'price' => 400.00,
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Зерновой кофе',
            'price' => 500.00,
            'category_id' => 2
        ]);

    }
}

