<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Read - Чтение: отображение списка всех продуктов
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    // Read - Чтение: отображение конкретного продукта
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    // Create - Создание: отображение формы для создания нового продукта
    public function create()
    {
        return view('products.create');
    }


    // Create - Создание: сохранение нового продукта
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price'),
        ]);

        return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
    }

    // Update - Обновление: отображение формы для редактирования продукта
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    // Update - Обновление: обновление данных продукта
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // Обновление продукта на основе данных из $request
        $product->update($request->all());
        return $product;
    }

    // Delete - Удаление: удаление продукта
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return $product;
    }
}
