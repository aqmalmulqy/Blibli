<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

    protected $fillable = [
        'product_name', 'product_price', 'product_desc','product_picture','user_id','product_category',
    ];

    public $timestamps = true;
}
