<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingLocation extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listing_locations';

    protected $fillable = [
        'country',
        'street',
        'city',
        'state',
        'suite',
        'zip_code',
        'neighborhood_description',
        'getting_around',
        'location_sharing',
        'privacy_cancellations',
        'latitude',
        'longitude',
        'scenic_views',

        'listing_id',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'scenic_views' => 'array',
    ];
}
