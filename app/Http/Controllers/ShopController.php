<?php

// app/Http/Controllers/ShopController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return $products;
    }
}
