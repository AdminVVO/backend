<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingBookingDetails extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listing_booking_details';

    protected $fillable = [
        'checkin_window_start',
        'checkin_window_end',
        'checkout_time',
        'guidebooks',
        'interaction_with_guests',
        'interaction_with_guests_comment',
        'country',
        'street',
        'city',
        'state',
        'zip_code',
        'directions',
        'guest_manual',
        'arrival_instructions',
        'wifi_details',

        'listing_id',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'checkin_window_start' => 'array',
        'checkin_window_end' => 'array',
        'checkout_time' => 'array',
    ];
}
