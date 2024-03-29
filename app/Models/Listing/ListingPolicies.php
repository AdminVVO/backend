<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingPolicies extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listing_policies';

    protected $fillable = [
        'cancellation_policy',
        'instant_book',
        'checkin_window_start',
        'checkin_window_end',
        'checkout_time',
        'security_deposit',

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
    
    ## Relaciones 
    public function Listings()
    {
        return $this->belongsTo(Listings::class, 'listing_id');
    }

    public function ListingReservationUser()
    {
        return $this->belongsTo(ReservationUser::class, 'listing_id');
    }
}
