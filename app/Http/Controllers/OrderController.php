<?php

// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Метод для отображения списка всех заказов
    public function index()
    {
        $orders = Order::all();
        return response()->json(['orders' => $orders]);
    }

    // Метод для отображения конкретного заказа
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return response()->json(['order' => $order]);
    }

    // Метод для создания нового заказа
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'total_amount' => 'required|numeric',
            'status' => 'required|string|max:255',
            // Дополнительные поля, которые могут потребоваться для вашего заказа
        ]);

        $order = Order::create([
            'customer_id' => $request->input('customer_id'),
            'total_amount' => $request->input('total_amount'),
            'status' => $request->input('status'),
            // Дополнительные поля, которые могут потребоваться для вашего заказа
        ]);

        return response()->json(['message' => 'Order created successfully', 'order' => $order]);
    }

    // Метод для обновления данных заказа
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return response()->json(['message' => 'Order updated successfully', 'order' => $order]);
    }

    // Метод для удаления заказа
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(['message' => 'Order deleted successfully']);
    }
}
