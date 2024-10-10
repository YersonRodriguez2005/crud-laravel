<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define los atributos que son asignables masivamente
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];
}
