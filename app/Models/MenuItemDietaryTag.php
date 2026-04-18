<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItemDietaryTag extends Model
{
    use HasFactory;


    protected $fillable = [
        'menu_item_id',
        'dietary_tag_id'
    ];
}
