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
        'archived_transm',
        'favorites_transm',
        'unread_transm',
        'archived_receiv',
        'favorites_receiv',
        'unread_receiv',
        'order_receiver',
        'order_transmitter',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'archived_transm' => 'boolean',
        'favorites_transm' => 'boolean',
        'unread_transm' => 'boolean',
        'archived_receiv' => 'boolean',
        'favorites_receiv' => 'boolean',
        'unread_receiv' => 'boolean',
        'order_receiver' => 'boolean',
        'order_transmitter' => 'boolean',
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

    public function scopeFavority($query, $code, $type)
    {
        /* ROLS ID == 1 */
        if ( $type )
            return $this->where('id_chats', $code)->pluck('favorites_receiv')->first();

        /* ROLS ID != 1 */
        if ( !$type )
            return $this->where('id_chats', $code)->pluck('favorites_transm')->first();
    }

    public function scopeArchive($query, $code, $type)
    {
        /* ROLS ID == 1 */
        if ( $type )
            return $this->where('id_chats', $code)->pluck('archived_receiv')->first();

        /* ROLS ID != 1 */
        if ( !$type )
            return $this->where('id_chats', $code)->pluck('archived_transm')->first();
    }

    public function scopeUnread($query, $code, $type)
    {
        /* ROLS ID == 1 */
        if ( $type )
            return $this->where('id_chats', $code)->pluck('unread_receiv')->first();

        /* ROLS ID != 1 */
        if ( !$type )
            return $this->where('id_chats', $code)->pluck('unread_transm')->first();
    }
}