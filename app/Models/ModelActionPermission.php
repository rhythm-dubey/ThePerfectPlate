<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelActionPermission extends Model
{
    use HasFactory;


    protected $fillable = [
        'model_id',
        'action_id'
    ];
}
