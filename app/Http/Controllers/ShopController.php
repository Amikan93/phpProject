<?php

// app/Http/Controllers/ShopController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//написать create read update delete для каждой сущности
class ShopController extends Controller
{
    /*public function showList()
    {
        $products = Product::with('category')->get();
        return $products;
    }*/

    public function showList($id)
    {
        $category = app(CategoryController::class)->show($id);
        $product = app(ProductController::class)->show($id);

        return view('shop.show', ['category' => $category, 'product' => $product]);
    }
}
