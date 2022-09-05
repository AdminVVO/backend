<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_profiles';

    protected $fillable = [
        'about',
        'location',
        'language',
        'work',
        'user_id',
    ];

    protected $casts = [
        'language' => 'array',
    ];

    public function ReservationProfile()
    {
        return $this->belongsTo(ReservationUser::class, 'user_id');
    }
}