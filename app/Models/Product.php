<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'color',
        'quantity',
        'height',
        'width',
        'depth',
        'weight',
        'category_id',
        'active',
        'bulk_slug'

    ];

    protected $table = 'products';
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bulks()
    {
        return $this->belongsTo(Bulk::class);
    }

    public function alternativeunit()
    {
        return $this->hasMany(AlternativeUnit::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

}
