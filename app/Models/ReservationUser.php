<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservationUser extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_reservation_users';

    protected $fillable = [
        'status',
        'code_reservation',
        'date_in',
        'date_out',
        'payment_pay_id',
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
        'legal' => 'array',
        'pets_allowed' => 'boolean',
        'smoking_allowed' => 'boolean',
        'events_allowed' => 'boolean',
    ];
    
    ## Relaciones 
    public function Listings()
    {
        return $this->hasOne('App\Models\Listing\Listings', 'id_listings', 'listing_id');
    }

    public function ListingsRulers()
    {
        return $this->hasOne('App\Models\Listing\ListingHouseRulers', 'listing_id', 'listing_id');
    }

    public function ListingPolicies()
    {
        return $this->hasOne('App\Models\Listing\ListingPolicies', 'listing_id', 'listing_id');
    }
}