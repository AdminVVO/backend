<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewClient extends Model
{
    use HasFactory, Uuids;

    protected $table = 'review_client';

    protected $primaryKey = 'id_review_client';
    
    protected $fillable = [
        'user_id',
        'reservation_id',
        'option',
        'review',
        'note',
        'rating_cleanliness',
        'rating_communication',
        'rating_observance',
    ];

    protected $dates = [
        'deleted_at'
    ];
}
