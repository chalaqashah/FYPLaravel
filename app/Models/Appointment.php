<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'appointment_number',
        'date',
        'time',
        'reason',
        'appointment_status',
        'client_id',
    ];

    /**
     * Get the client that owns the appointment.
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
