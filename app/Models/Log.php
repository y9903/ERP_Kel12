<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'status',
        'stock',
        'nota'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
