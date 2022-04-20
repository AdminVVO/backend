<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageChats extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_message_chats';

    protected $fillable = [
        'message',
        'type',
        'user_id',
        'chats_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function chats()
    {
        return $this->belongsToMany(Chats::class, 'chats_id');
    }
}