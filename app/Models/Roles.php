<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model 
{
    protected $primaryKey = 'id_roles';

    protected $fillable = [
        'name',
        'rol',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}