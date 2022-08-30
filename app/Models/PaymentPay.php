<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentPay extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_payment_pays';

    protected $fillable = [
        'status',
        'order',
        'payer_id',
        'name',
        'email',
        'address',
        'currency',
        'amount',
        'user_id',
        'listing_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}