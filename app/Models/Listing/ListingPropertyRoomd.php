<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingPropertyRoomd extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listing_property_roomds';

    protected $fillable = [
        'like_place',
        'property_type',
        'listing_type',
        'floors',
        'floors_on',
        'bedrooms',
        'bed',
        'bathrooms',
        'additional_areas',
        'shared_areas',

        'listing_id',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'additional_areas' => 'array',
    ];
}
