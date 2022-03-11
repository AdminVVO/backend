<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingHouseRulers extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listing_house_rulers';

    protected $fillable = [
        'suitable_for_children',
        'suitable_for_infants',
        'pets_allowed',
        'smoking_allowed',
        'events_allowed',
        'additional_rules',
        'profile_photo_required',
        'local_laws',
        'primary_listing',

        'listing_id',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'suitable_for_children' => 'boolean',
        'suitable_for_infants' => 'boolean',
        'pets_allowed' => 'boolean',
        'smoking_allowed' => 'boolean',
        'events_allowed' => 'boolean',
        'profile_photo_required' => 'boolean',
    ];
}
