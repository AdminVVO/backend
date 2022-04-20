<?php

namespace App\Models\Listing;

use App\Models\User;
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
        'template',
        'amenities',
        'safety',
        'photos',
        'category',
        'featurs',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'category' => 'array',
        'featurs' => 'array',
        'photos' => 'array',
        'amenities' => 'array',
        'safety' => 'array',
        'restricted_checkin_days' => 'array',
        'restricted_checkout_days' => 'array',
        'minimum_stay_custom' => 'array',
        'scenic_views' => 'array',
        'other_discount_array' => 'array',
        'last_minute_discount_array' => 'array',
        'checkin_window_start' => 'array',
        'checkin_window_end' => 'array',
        'checkout_time' => 'array',
    ];

    public function userChat()
    {
        return $this->belongsTo(User::class, 'user_id')->select(['id_user', 'name']);
    }

    public function chatListing()
    {
        return $this->hasMany(Chats::class, 'listing_id');
    }
}
