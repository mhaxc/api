<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name'
    ];

    protected $table = 'bulks';
    protected $keyType = 'string';
    protected $primaryKey = 'slug';
    public $incrementing = false;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function alternative_unit()
    {
        return $this->hasMany(AlternativeUnit::class);
    }

}
