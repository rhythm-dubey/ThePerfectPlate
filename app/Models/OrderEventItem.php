<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderEventItem extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_event_id',
        'menu_item_id',
        'quantity',
        'unit_price',
        'total_price',
        'special_instructions'
    ];
}
