<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusReservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_status_reservations';

    protected $fillable = [
        'name',
        'comment',
        'color',
        'status',
    ];

    public function Reservation()
    {
        return $this->belongsTo(ReservationUser::class, 'status');
    }
}
