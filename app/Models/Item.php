<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
        protected $fillable = [
            'order_id',
            'product_id',
            'quantity',
            'value'

        ];
        protected $table = 'items';

        public function order()

        {
        return $this->belongsToMany(Order::class);
        }

     public function product()

        {
        return $this->belongsTo(Product::class);
        }


}
