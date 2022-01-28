<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCategory extends Model
{
    use HasFactory;
    protected $casts = [
        'thumbNailUrl' => 'array'
    ];
}
