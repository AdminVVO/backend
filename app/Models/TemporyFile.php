<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporyFile extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_tempory_files';

    protected $fillable = [
        'temp',
        'user_id',
    ];
}
