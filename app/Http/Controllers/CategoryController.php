<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        // Создание новой категории
        $category = Category::create([
            'category_name' => $request->input('category_name'),
        ]);

        // Возвращение JSON-ответа с данными о созданной категории
        return response()->json(['category' => $category], 201);
    }

    public function show(string $id)
    {
        //Выводит данные по id, к примеру 1
        $category = Category::findOrFail($id);
        return $category;
    }

    public function edit(Category $category)
    {
        return response()->json(['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        // Валидация данных
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        // Обновление данных категории
        $category->update([
            'category_name' => $request->input('category_name'),
        ]);

        // Перенаправление на страницу с подтверждением
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');

    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);    
    }

    public function getProductByCategory($category_id){
        $products = Product::where('category_id','=', $category_id)->paginate(2);
        return $products;
    }
}
