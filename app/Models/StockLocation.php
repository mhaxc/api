<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockLocation extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'description',


    ];

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

}
