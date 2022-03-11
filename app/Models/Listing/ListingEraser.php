<?php

namespace App\Models\Listing;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingEraser extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_listing_erasers';

    protected $fillable = [
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
        
        'user_id',
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