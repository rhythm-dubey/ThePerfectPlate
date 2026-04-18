<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_number',
        'customer_id',
        'created_by',
        'order_status_id',
        'payment_status_id',
        'order_date',
        'subtotal',
        'tax_amount',
        'discount_amount',
        'delivery_charges',
        'total_amount',
        'special_instructions',
        'cancellation_reason'
    ];
}
