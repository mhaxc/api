<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'document',
        'email',
        'postal_code',
        'address',
        'neighborhood',
        'city',
        'number',
        'state'

    ];

    protected $table = 'Customers';

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function userHasCustomer()
    {
        return $this->hasMany(userHasCustomer::class);
    }
}
