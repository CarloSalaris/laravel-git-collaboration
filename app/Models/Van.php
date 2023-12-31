<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    use HasFactory;

    protected $fillable = [

        "brand",
        "price",
        "seat",
        "used",
        "image",
        "engineCapacity",
        "weight",
        "fuel",
        "color",
        "model",
        "releaseDate"
        
    ];
}
