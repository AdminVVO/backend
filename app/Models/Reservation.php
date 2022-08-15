<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'listing_id',
        'status',
        'reservation_amount',
        'total_payout',
        'checkin',
        'checkout',
        'booked',
        'note'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
