<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory, Uuids;

    protected $table = 'reviews';

    protected $primaryKey = 'review_id';

    protected $fillable = [
        'user_id',
        'listing_id',
        'comment',
        'note',
        'rating_stay',
        'rating_cleanliness',
        'rating_communication',
        'rating_check',
        'rating_accuracy',
        'rating_location',
        'rating_value',
    ];
}
