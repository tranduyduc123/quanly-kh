<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'id',
        'product',
        'quantity',
        'price',
    ];
        
}
