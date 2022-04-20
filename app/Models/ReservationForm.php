<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservationForm extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_reservation_forms';

    protected $fillable = [
        'vvo_confirm',
        'resort_confirm',
        'date',
        'request',
        'name_site',
        'costumb_name',
        'spouse_name',
        'address',
        'city',
        'state_address',
        'zip_code',
        'phone',
        'occupation',
        'spouse_occupation',
        'status_marital',
        'ages',
        'combine_amount',
        'type_card',
        'room_type',
        'guest_number',
        'checkin',
        'checkout',
        'in_party',
        'of_night',
        'preferenc_tour',
        'gifting',
        'template',
        'comment',
        'tour_date',
        'user_id',
        'listing_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}


