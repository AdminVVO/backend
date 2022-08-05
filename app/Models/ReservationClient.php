<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationClient extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_report_messages';

    protected $fillable = [
        'questions',
        'comment',
        'message_id',
        'user_id',
        'chats_id',
    ];
}
