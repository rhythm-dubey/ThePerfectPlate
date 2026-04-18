<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'description',
        'display_order',
        'is_active'
    ];
}
