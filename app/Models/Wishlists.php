<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_wishlists';

    protected $fillable = [
        'name',
        'avatar',
        'user_id',
        'listing_id',
    ];

    protected $casts = [
        'photos' => 'array',
    ];
}
