<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingCalendarAvailability extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listing_calendar_availabilities';

    protected $fillable = [
        'minimum_stay',
        'minimum_stay_custom',
        'maximum_stay',
        'advance_notice',
        'preparation_time',
        'availability_window',
        'restricted_checkin_days',
        'restricted_checkout_days',
        'snooze',

        'listing_id',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'restricted_checkin_days' => 'array',
        'restricted_checkout_days' => 'array',
        'minimum_stay_custom' => 'array',
        'snooze' => 'array',
    ];
}
