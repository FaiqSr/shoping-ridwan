<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'name',
        'desc',
        'stok',
        'image'
    ];

    public function chart(): HasMany
    {
        return $this->hasMany(Chart::class, 'product_id');
    }
}
