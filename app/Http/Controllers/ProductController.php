<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        // Пример данных продуктов
        $products = [
            ['id' => 1, 'name' => 'Чай зелёный', 'price' => 1200],
            ['id' => 2, 'name' => 'Чай чёрный', 'price' => 1000],
            ['id' => 3, 'name' => 'Чай пуэр', 'price' => 3500],
            ['id' => 4, 'name' => 'Кофе молотый', 'price' => 4000],
            ['id' => 4, 'name' => 'Кофе растворимый ', 'price' => 1500],
        ];

        return view('products.index', ['products' => $products]);
    }
}
