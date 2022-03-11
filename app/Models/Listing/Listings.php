<?php

namespace App\Models\Listing;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listings extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_listings';

    protected $fillable = [
        'step',
        'title',
        'internal_title',
        'descriptions',
        'space',
        'guest_access',
        'other_details',
        'number_guests',
        'custom_link',
        'language_default',
        'status',
        'resort',
        'amenities',
        'safety',
        'photos',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'photos' => 'array',
        'amenities' => 'array',
        'safety' => 'array',
        'restricted_checkin_days' => 'array',
        'restricted_checkout_days' => 'array',
        'minimum_stay_custom' => 'array',
        'scenic_views' => 'array',
    ];
}
