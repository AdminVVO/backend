<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingPricing extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listing_pricings';

    protected $fillable = [
        'base_price',
        'listing_currency',
        'weekly_discount',
        'monthly_discount',
        'other_discount',
        'other_discount_porcent',
        'early_bird_discount',
        'early_bird_discount_porcent',
        'last_minute_discount',
        'last_minute_discount_porcent',
        'cleaning_fee',
        'pet_fee',
        'linens_fee',
        'resort_fee',
        'resort_type',
        'management_fee',
        'management_type',
        'community_fee',
        'community_type',
        'extra_guest_fee',
        'weekend_nightly_fee',

        'listing_id',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}