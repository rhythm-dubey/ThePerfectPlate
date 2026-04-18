<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderEvent extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_id',
        'event_id',
        'event_name',
        'start_datetime',
        'end_datetime',
        'venue_address',
        'guest_count',
        'special_instructions',
        'display_order'
    ];
}
