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
}