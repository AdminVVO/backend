<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemp extends Model
{
    use HasFactory;

    protected $table = 'user_temp';

    protected $fillable = [
        'id',
        'user_id',
    ];
}
