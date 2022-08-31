<?php

namespace App\Models\Listing;

use App\Models\User;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Listings extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_listings';

    protected $fillable = [
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
        'template',
        'amenities',
        'photos',
        'aspect',
        'legal',
        'user_id',
        'snooze',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'aspect' => 'array',
        'legal' => 'array',
        'photos' => 'array',
        'amenities' => 'array',
        'restricted_checkin_days' => 'array',
        'restricted_checkout_days' => 'array',
        'minimum_stay_custom' => 'array',
        'scenic_views' => 'array',
        'other_discount_array' => 'array',
        'last_minute_discount_array' => 'array',
        'checkin_window_start' => 'array',
        'checkin_window_end' => 'array',
        'checkout_time' => 'array',
        'snooze' => 'array',
        'allow' => 'array',
        'pets_allowed' => 'boolean',
    ];

    public function scopeListingFile($query, $code)
    {
        $xplodeListingFile = explode('-', $this->where(['id_listings' => $code ])->pluck('id_listings')->first());
        return $xplodeListingFile[4];
    }

    public function scopeTitle($query, $code)
    {
        return $this->where(['id_listings' => $code ])->pluck('title')->first();
    }

    public function userChat()
    {
        return $this->belongsTo(User::class, 'user_id')->select(['id_user', 'name']);
    }

    public function chatListing()
    {
        return $this->hasMany(Chats::class, 'listing_id');
    }


    ## Relaciones 
    public function ListingPropertyRoomd()
    {
        return $this->hasOne(ListingPropertyRoomd::class, 'listing_id');
    }
    
    public function ListingLocation()
    {
        return $this->hasOne(ListingLocation::class, 'listing_id');
    }

    public function ListingPolicies()
    {
        return $this->hasOne(ListingPolicies::class, 'listing_id');
    }

    public function ListingReservationUser()
    {
        return $this->belongsTo(ReservationUser::class, 'listing_id');
    }
}
