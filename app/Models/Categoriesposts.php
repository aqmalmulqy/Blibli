<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriesposts extends Model
{
    // use HasFactory;

    protected $fillable = [
        'categories_id','product_id',
    ];

    public $timestamps = true;
}
