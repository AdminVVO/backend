<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listings extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_listings';

    protected $fillable = [
        'user_id',
        'step',
        'host',
        'description',
        'space',
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

    protected $casts = [
        'offers' => 'array',
        'photos' => 'array',
        'placeOptions' => 'array',
        'featurs' => 'array',
    ];
}

