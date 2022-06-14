<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonValidation extends Model
{
    use HasFactory, Uuids;

    protected $table = 'person_validation';

    protected $primaryKey = 'id_person_validation';

    protected $fillable = [
        'user_id',
        'typeUpload',
        'typeDocument',
        'country',
        'photo',
        'document',
    ];

    protected $casts = [
        'photo' => 'array',
        'document' => 'array'
    ];
}
