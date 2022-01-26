<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmergencyUsers extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_emergency_users';

    protected $fillable = [
        'name',
        'relationship',
        'language',
        'email',
        'country',
        'phone',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'id_currencs',
    ];
}