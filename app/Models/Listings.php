<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listings extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listings';

    protected $fillable = [
        'user_id',
        'step',
        'host',
        'description',
        'space',
        'location',
        'guests',
        'offers',
        'photos',
        'placeTitle',
        'placeOptions',
        'placeComment',
        'prices',
        'featurs',
        'img',
        'status',
    ];

    protected $dates = [
        'deleted_at'
    ];
}

