<?php

namespace App\Models;

use App\Traits\Statusable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Statusable;

    protected $fillable = [
        'user_id',
        'total_price',
        'full_name',
        'email',
        'address',
        'phone_number',
        'status',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_orders')
            ->withPivot('product_id', 'order_id', 'quantity', 'price');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function productOrders()
    {
        return $this->hasMany(ProductOrder::class);
    }
}
