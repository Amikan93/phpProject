<?php

// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'total_amount',
        'status',
        // Дополнительные поля, которые могут потребоваться для вашего заказа
    ];

    // Связь "один ко многим" с продуктами
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Связь "многие ко многим" с категориями через продукты
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'products', 'order_id', 'category_id');
    }
}
