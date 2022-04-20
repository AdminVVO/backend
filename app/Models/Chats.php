<?php

namespace App\Models;

use App\Models\Listing\Listings;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chats extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_chats';

    protected $fillable = [
        'transmitter_id',
        'receiver_id',
        'listing_id',
        'archived',
        'favorites',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'archived' => 'boolean',
        'favorites' => 'boolean',
    ];

    public function transmitter()
    {
        return $this->belongsTo(User::class, 'transmitter_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function message()
    {
        return $this->hasMany(MessageChats::class, 'chats_id');
    }

    public function listing()
    {
        return $this->belongsTo(Listings::class, 'listing_id');
    }
}