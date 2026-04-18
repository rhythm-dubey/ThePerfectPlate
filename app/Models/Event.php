<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'description',
        'default_setup_minutes',
        'is_active',
        'display_order'
    ];
}
