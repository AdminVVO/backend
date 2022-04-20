<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_feedback';

    protected $fillable = [
        'questions',
        'comment',
        'bug',
        'user_id',
        'listing_id',
    ];

    protected $casts = [
        'bug' => 'boolean',
    ];
}