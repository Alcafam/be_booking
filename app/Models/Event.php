<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'event_date', 
        'event_time',
        'location', 
        'total_capacity', 
    ];

    protected $dates = ['event_date'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
