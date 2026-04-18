<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'unit',
        'base_price',
        'is_available',
        'is_vegetarian'
    ];
}
