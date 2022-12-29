<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'count',
        'status',
        'category_id',
        'code',
        'warehouse_id'
    ];
    public function warehouses()
    {
        return $this->belongsTo(Warehouse::class,'warehouse_id');
    }


    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}
