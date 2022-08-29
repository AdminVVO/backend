<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportUsers extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'id_report_user';
    
    protected $fillable = [
        'user_id',
        'reservation_id',
        'option',
        'reason',
    ];
}
