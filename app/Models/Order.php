<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'warehouse_id',
        'client_id',
        'created_by',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function warehouses()
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id');
    }
}
